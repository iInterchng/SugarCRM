/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



Studio2.RowDD = function(id, sGroup) {
	Studio2.RowDD.superclass.constructor.call(this, id, sGroup);

    var el = this.getDragEl();
    YAHOO.util.Dom.setStyle(el, "opacity", 0.67);
	this.goingUp = false;
    this.lastY = 0;
};

	
YAHOO.extend(Studio2.RowDD, YAHOO.util.DDProxy, {

    startDrag: function(x, y) { 	
        // make the proxy look like the source element
		var dragEl = this.getDragEl();
		var clickEl = this.getEl();
		dragEl.innerHTML = "";
		Studio2.copyChildren(clickEl, dragEl);
		dragEl.className = clickEl.className;
		this.deleteRow = false;
		Studio2.copyId = null;
		
		if (Studio2.isSpecial(clickEl)) {
			var copy = Studio2.newRow(true);
			Studio2.setCopy(copy);
			clickEl.parentNode.insertBefore(copy,clickEl.nextSibling);
			YAHOO.util.Dom.setStyle(copy, 'display','block');
			YAHOO.util.Dom.setStyle(clickEl, 'display','none');
		}
		
		YAHOO.util.Dom.setStyle(clickEl,'visibility','hidden');
    },

    endDrag: function(e) {
		ModuleBuilder.state.isDirty=true;
 //   	alert("endDrag");
     
        var srcEl = this.getEl();
        var proxy = this.getDragEl();      
        var proxyid = proxy.id;
        var thisid = this.id;
        
        if (this.deleteRow) {
			Studio2.removeElement(srcEl);
			proxy.innerHTML = '';
        } else {
       		// Show the proxy element and animate it to the src element's location
        	YAHOO.util.Dom.setStyle(proxy, 'visibility','');
        	YAHOO.util.Dom.setStyle(srcEl, "display","");
        	//Dom.setStyle(proxy, "visibility", "");
        	//Dom.setStyle(srcEl, "display",""); // display!=none for getXY to work
        
        	/*Ext.get(proxy).alignTo(srcEl, 'tl', null, {
				callback: function(){*/
        			YAHOO.util.Dom.setStyle(proxyid,"visibility","hidden");
        			YAHOO.util.Dom.setStyle(thisid,"visibility","");
				//}
			//});
        	
			if (Studio2.isSpecial(srcEl)) {
				if (Studio2.establishLocation(srcEl) == 'panels') {
					// dropping on the panels means that the row is no longer special
					Studio2.unsetSpecial(srcEl);
					// now remove the title for this new row - only wanted while we were in the toolbox
					for (var i=0;i<srcEl.childNodes.length;i++) {
						if (srcEl.childNodes[i].tagName.toUpperCase() == 'SPAN') {
							srcEl.removeChild(srcEl.childNodes[i]);
							break;
						}
					}
					Studio2.setSpecial(Studio2.copy());
					Studio2.activateCopy();
					YAHOO.util.Dom.setStyle(Studio2.copy(), "display","block");
				}
				else
				{
					// we have a special row that hasn't been moved to the panels area - invalid drop, so remove the copy if there is one
					var copy = document.getElementById(Studio2.copyId);
					copy.parentNode.removeChild(copy);
					Studio2.copyID = null;
				}
			}
        } 
        // If we've just removed the last row from a panel then we need to remove the panel
		// Brute force approach as can't easily discover where this row came from
		
		var panels = document.getElementById('panels');
		
		for (var i=0;i<panels.childNodes.length;i++) {
			var panel = panels.childNodes[i];
			if (panel.nodeName == 'DIV') { // a panel
				Studio2.tidyRows(panel);
        	}
		}

    },

	onInvalidDrop: function(e) {
		this.getDragEl().innerHTML = '';
	},
	
    onDragDrop: function(e, id) {
		var srcEl = this.getEl();
		var destEl = document.getElementById(id); // where this element is being dropped
		
		// if source was in a panel (not toolbox) and destination is the delete area then remove this element
		var srcLoc = Studio2.establishLocation(srcEl);
		var dstLoc = Studio2.establishLocation(destEl);
		if ((Studio2.establishLocation(srcEl) == 'panels') && (Studio2.establishLocation(destEl) == 'delete')) {
			this.deleteRow = true;
		}
    },

    onDrag: function(e) {
       // Keep track of the direction of the drag for use during onDragOver
        var y = e.pageY;

        if (y < this.lastY) {
            this.goingUp = true;
        } else if (y > this.lastY) {
            this.goingUp = false;
        }

        this.lastY = y;
    },

    onDragOver: function(e, id) {
        var srcEl = this.getEl();
        var destEl = document.getElementById(id);
        var srcLoc = Studio2.establishLocation(srcEl);
		var dstLoc = Studio2.establishLocation(destEl);
		if ((Studio2.establishLocation(destEl) == 'panels') && (destEl.className.indexOf('le_row') != -1)) {
        	
        	YAHOO.util.Dom.setStyle(srcEl, "visibility","hidden");
        	YAHOO.util.Dom.setStyle(srcEl, "display"   ,"block");
        	var orig_p = srcEl.parentNode;
            var p = destEl.parentNode;

            if (this.goingUp) {
				p.insertBefore(srcEl, destEl); // insert above
            } else {
                p.insertBefore(srcEl, destEl.nextSibling); // insert below
            }
        }
    }
});


