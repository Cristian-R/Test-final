game.SpendExp = me.ScreenObject.extend({
    /**
     *  action to perform on state change
     **/
    onResetEvent: function() {
        me.game.world.addChild(new me.Sprite(0, 0, me.loader.getImage("exp-screen")), -10); // TODO
        //Binds keys f1-f6
        me.input.bindKey(me.input.KEY.F1, "F1");
        me.input.bindKey(me.input.KEY.F2, "F2");
        me.input.bindKey(me.input.KEY.F3, "F3");
        me.input.bindKey(me.input.KEY.F4, "F4");
        me.input.bindKey(me.input.KEY.F5, "F5");
        var exp1cost = ((Number(game.data.exp1) + 1) * 10);

        me.game.world.addChild(new (me.Renderable.extend({
            init: function() {
                this._super(me.Renderable, "init", [10, 10, 300, 50]);
                this.font = new me.Font("Arial", 26, "white");
            },
            draw: function(renderer) {
                this.font.draw(renderer.getContext(), "Press F1-F4 to buy, F5 to skip", this.pos.x, this.pos.y);
                this.font.draw(renderer.getContext(), "Current Exp: " + game.data.exp.toString(), this.pos.x + 100, this.pos.y + 50);
                this.font.draw(renderer.getContext(), "F1: Increase Gold Production: Current Level: " + game.data.exp1.toString() + " Cost: " + exp1cost, this.pos.x, this.pos.y + 100);
                this.font.draw(renderer.getContext(), "F2: Add Starting Gold", this.pos.x, this.pos.y + 150);
                this.font.draw(renderer.getContext(), "F3: Increase Attack Damage", this.pos.x, this.pos.y + 200);
                this.font.draw(renderer.getContext(), "F4: Increase Starting Health", this.pos.x, this.pos.y + 250);
                //sets where everything will bw
            }
        })));

        this.handler = me.event.subscribe(me.event.KEYDOWN, function(action, keyCode, edge) {
            if (action === "F1") {
                if (game.data.exp >= exp1cost) {
                    game.data.exp1 += 1;
                    game.data.exp -= exp1cost;
                    me.state.change(me.state.PLAY);
                } else {
                    console.log('not enough recources save up');
                }
            } else if (action === "F2") {
//does absolutly nothing
            } else if (action === "F3") {
//trying to add cool stufff before presentations.
            } else if (action === "F4") {

            } else if (action === "F5") {
                me.state.change(me.state.PLAY);
            }
        });


    },
    /**	
     * action to perform when leaving this screen (state change)
     **/
    onDestroyEvent: function() {
        me.input.unbindKey(me.input.KEY.F1, "F1");
        //all of these just make it so that once 
        me.input.unbindKey(me.input.KEY.F2, "F2");
        //we start the game/ or change the screen 
        me.input.unbindKey(me.input.KEY.F3, "F3");
        //we cant use these buttons anymore
        me.input.unbindKey(me.input.KEY.F4, "F4");
        
        me.input.unbindKey(me.input.KEY.F5, "F5");
        
        me.event.unsubscribe(this.handler);
        
    }
    
});




