/*
 Copyright (c) 2009, Yahoo! Inc. All rights reserved.
 Code licensed under the BSD License:
 http://developer.yahoo.net/yui/license.txt
 version: 3.0.0
 build: 1549
 */
YUI.add("event-custom-complex",function(A){(function(){var C,D,B=A.CustomEvent.prototype;A.EventFacade=function(F,E){F=F||{};this.details=F.details;this.type=F.type;this.target=F.target;this.currentTarget=E;this.relatedTarget=F.relatedTarget;this.stopPropagation=function(){F.stopPropagation();};this.stopImmediatePropagation=function(){F.stopImmediatePropagation();};this.preventDefault=function(){F.preventDefault();};this.halt=function(G){F.halt(G);};};B.fireComplex=function(H){var L=A.Env._eventstack,F,J,E,K,G,I;if(L){if(this.queuable&&this.type!=L.next.type){this.log("queue "+this.type);L.queue.push([this,H]);return true;}}else{A.Env._eventstack={id:this.id,next:this,silent:this.silent,stopped:0,prevented:0,queue:[]};L=A.Env._eventstack;}this.stopped=0;this.prevented=0;this.target=this.target||this.host;I=new A.EventTarget({fireOnce:true,context:this.host});this.events=I;if(this.preventedFn){I.on("prevented",this.preventedFn);}if(this.stoppedFn){I.on("stopped",this.stoppedFn);}this.currentTarget=this.host||this.currentTarget;this.details=H.slice();this.log("Firing "+this.type);this._facade=null;F=this._getFacade(H);if(A.Lang.isObject(H[0])){H[0]=F;}else{H.unshift(F);}if(this.hasSubscribers){this._procSubs(A.merge(this.subscribers),H,F);}if(this.bubbles&&this.host&&this.host.bubble&&!this.stopped){L.stopped=0;L.prevented=0;G=this.host.bubble(this);this.stopped=Math.max(this.stopped,L.stopped);this.prevented=Math.max(this.prevented,L.prevented);}if(this.defaultFn&&!this.prevented){this.defaultFn.apply(this.host||this,H);}this._broadcast(H);if(this.hasAfters&&!this.prevented&&this.stopped<2){this._procSubs(A.merge(this.afters),H,F);}if(L.id===this.id){E=L.queue;while(E.length){J=E.pop();K=J[0];L.stopped=0;L.prevented=0;L.next=K;K.fire.apply(K,J[1]);}A.Env._eventstack=null;}return this.stopped?false:true;};B._getFacade=function(){var E=this._facade,H,G,F=this.details;if(!E){E=new A.EventFacade(this,this.currentTarget);}H=F&&F[0];if(A.Lang.isObject(H,true)){G={};A.mix(G,E,true,D);A.mix(E,H,true);A.mix(E,G,true,D);}E.details=this.details;E.target=this.target;E.currentTarget=this.currentTarget;E.stopped=0;E.prevented=0;this._facade=E;return this._facade;};B.stopPropagation=function(){this.stopped=1;A.Env._eventstack.stopped=1;this.events.fire("stopped",this);};B.stopImmediatePropagation=function(){this.stopped=2;A.Env._eventstack.stopped=2;this.events.fire("stopped",this);};B.preventDefault=function(){if(this.preventable){this.prevented=1;A.Env._eventstack.prevented=1;this.events.fire("prevented",this);}};B.halt=function(E){if(E){this.stopImmediatePropagation();}else{this.stopPropagation();}this.preventDefault();};A.EventTarget.prototype.bubble=function(M,K,I){var G=this._yuievt.targets,J=true,N,L,E,F,H;if(!M||((!M.stopped)&&G)){for(F in G){if(G.hasOwnProperty(F)){N=G[F];L=M&&M.type;E=N.getEvent(L,true);if(!E){if(N._yuievt.hasTargets){N.bubble.call(N,M,K,I);}}else{E.target=I||(M&&M.target)||this;E.currentTarget=N;H=E.broadcast;E.broadcast=false;J=J&&E.fire.apply(E,K||M.details);E.broadcast=H;if(E.stopped){break;}}}}}return J;};C=new A.EventFacade();D=A.Object.keys(C);})();},"3.0.0",{requires:["event-custom-base"]});