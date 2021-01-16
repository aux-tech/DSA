
/*jslint plusplus: true, sloppy: true, indent: 4 */
(function () {
    "use strict";
    // this function is strict...
}());
class speedometer{
    
    constructor(id){
    
 this.iCurrentSpeed = 20,
 this.iTargetSpeed = 20,
 this.bDecrement = null,
 this.job = null,
 this.id = id;
}

 degToRad(angle) {
    // Degrees to radians
    return ((angle * Math.PI) / 180);
}

 radToDeg(angle) {
    // Radians to degree
    return ((angle * 180) / Math.PI);
}

 drawLine(options, line) {
    // Draw a line using the line object passed in
    options.ctx.beginPath();

    // Set attributes of open
    options.ctx.globalAlpha = line.alpha;
    options.ctx.lineWidth = line.lineWidth;
    options.ctx.fillStyle = line.fillStyle;
    options.ctx.strokeStyle = line.fillStyle;
    options.ctx.moveTo(line.from.X,
        line.from.Y);

    // Plot the line
    options.ctx.lineTo(
        line.to.X,
        line.to.Y
    );

    options.ctx.stroke();
}

 createLine(fromX, fromY, toX, toY, fillStyle, lineWidth, alpha) {
    // Create a line object using Javascript object notation
    return {
        from: {
            X: fromX,
            Y: fromY
        },
        to:    {
            X: toX,
            Y: toY
        },
        fillStyle: fillStyle,
        lineWidth: lineWidth,
        alpha: alpha
    };
}

 drawOuterMetallicArc(options) {
    /* Draw the metallic border of the speedometer
     * Outer grey area
     */
/*    options.ctx.beginPath();

    // Nice shade of grey
    options.ctx.fillStyle = "rgb(127,127,127)";

    // Draw the outer circle
    options.ctx.arc(options.center.X,
        options.center.Y,
        options.radius,
        0,
        Math.PI,
        true);

    // Fill the last object
    options.ctx.fill();
*/
}

 drawInnerMetallicArc(options) {
    /* Draw the metallic border of the speedometer
     * Inner white area
     */

    /*options.ctx.beginPath();

    // White
    options.ctx.fillStyle = "rgb(255,255,255)";

    // Outer circle (subtle edge in the grey)
    options.ctx.arc(options.center.X,
                    options.center.Y,
                    (options.radius / 100) * 90,
                    0,
                    Math.PI,
                    true);

    options.ctx.fill();
    
    */
}

 drawMetallicArc(options) {
    /* Draw the metallic border of the speedometer
     * by drawing two semi-circles, one over lapping
     * the other with a bot of alpha transparency
     */

    this.drawOuterMetallicArc(options);
    this.drawInnerMetallicArc(options);
}

 drawBackground(options) {
    /* Black background with alphs transparency to
     * blend the edges of the metallic edge and
     * black background
     */
   var i = 0;

    options.ctx.globalAlpha = 0.2;
    options.ctx.fillStyle = "rgba(0,0,0,0)";

    // Draw semi-transparent circles
    for (i = 170; i < 180; i++) {
        options.ctx.beginPath();

        options.ctx.arc(options.center.X,
            options.center.Y,
            i,
            0,
            Math.PI,
            true);

        options.ctx.fill();
    }
    
}

 applyDefaultContextSettings(options) {
    /* Helper function to revert to gauges
     * default settings
     */

    options.ctx.lineWidth = 4;
    options.ctx.globalAlpha = 1;
    options.ctx.strokeStyle = "rgb(255, 255, 255)";
    options.ctx.fillStyle = 'rgb(0,0,0)';
}

 drawSmallTickMarks(options) {
    /* The small tick marks against the coloured
     * arc drawn every 5 mph from 10 degrees to
     * 170 degrees.
     */

    var tickvalue = options.levelRadius - 8,
        iTick = 0,
        gaugeOptions = options.gaugeOptions,
        iTickRad = 0,
        onArchX,
        onArchY,
        innerTickX,
        innerTickY,
        fromX,
        fromY,
        line,
        toX,
        toY;

        this.applyDefaultContextSettings(options);

    // Tick every 20 degrees (small ticks)
    for (iTick = 10; iTick < 180; iTick += 20) {

        iTickRad = this.degToRad(iTick);

        /* Calculate the X and Y of both ends of the
         * line I need to draw at angle represented at Tick.
         * The aim is to draw the a line starting on the
         * coloured arc and continueing towards the outer edge
         * in the direction from the center of the gauge.
         */

        onArchX = gaugeOptions.radius - (Math.cos(iTickRad) * tickvalue);
        onArchY = gaugeOptions.radius - (Math.sin(iTickRad) * tickvalue);
        innerTickX = gaugeOptions.radius - (Math.cos(iTickRad) * gaugeOptions.radius);
        innerTickY = gaugeOptions.radius - (Math.sin(iTickRad) * gaugeOptions.radius);

        fromX = (options.center.X - gaugeOptions.radius) + onArchX;
        fromY = (gaugeOptions.center.Y - gaugeOptions.radius) + onArchY;
        toX = (options.center.X - gaugeOptions.radius) + innerTickX;
        toY = (gaugeOptions.center.Y - gaugeOptions.radius) + innerTickY;

        // Create a line expressed in JSON
        line = this.createLine(fromX, fromY, toX, toY, "rgb(127,127,127)", 3, 0.6);

        // Draw the line
        this.drawLine(options, line);

    }
}

 drawLargeTickMarks(options) {
    /* The large tick marks against the coloured
     * arc drawn every 10 mph from 10 degrees to
     * 170 degrees.
     */

    var tickvalue = options.levelRadius - 8,
        iTick = 0,
        gaugeOptions = options.gaugeOptions,
        iTickRad = 0,
        innerTickY,
        innerTickX,
        onArchX,
        onArchY,
        fromX,
        fromY,
        toX,
        toY,
        line;

        this.applyDefaultContextSettings(options);

    tickvalue = options.levelRadius - 2;

    // 10 units (major ticks)
    for (iTick = 20; iTick < 180; iTick += 20) {

        iTickRad = this.degToRad(iTick);

        /* Calculate the X and Y of both ends of the
         * line I need to draw at angle represented at Tick.
         * The aim is to draw the a line starting on the
         * coloured arc and continueing towards the outer edge
         * in the direction from the center of the gauge.
         */

        onArchX = gaugeOptions.radius - (Math.cos(iTickRad) * tickvalue);
        onArchY = gaugeOptions.radius - (Math.sin(iTickRad) * tickvalue);
        innerTickX = gaugeOptions.radius - (Math.cos(iTickRad) * gaugeOptions.radius);
        innerTickY = gaugeOptions.radius - (Math.sin(iTickRad) * gaugeOptions.radius);

        fromX = (options.center.X - gaugeOptions.radius) + onArchX;
        fromY = (gaugeOptions.center.Y - gaugeOptions.radius) + onArchY;
        toX = (options.center.X - gaugeOptions.radius) + innerTickX;
        toY = (gaugeOptions.center.Y - gaugeOptions.radius) + innerTickY;

        // Create a line expressed in JSON
        line = this.createLine(fromX, fromY, toX, toY, "rgb(127,127,127)", 3, 0.6); //Marcador

        // Draw the line
        this.drawLine(options, line);
    }
}

 drawTicks(options) {
    /* Two tick in the coloured arc!
     * Small ticks every 5
     * Large ticks every 10
     */
    this.drawSmallTickMarks(options);
    this.drawLargeTickMarks(options);
}

 drawTextMarkers(options) {
    /* The text labels marks above the coloured
     * arc drawn every 10 mph from 10 degrees to
     * 170 degrees.
     */
    var innerTickX = 0,
        innerTickY = 0,
        iTick = 0,
        gaugeOptions = options.gaugeOptions,
        iTickToPrint = 0;

        this.applyDefaultContextSettings(options);

    // Font styling
    options.ctx.font = 'italic 10px sans-serif';
    options.ctx.textBaseline = 'top';

    options.ctx.beginPath();

    // Tick every 20 (small ticks)
    for (iTick = 10; iTick <= 180; iTick += 16) {

        innerTickX = gaugeOptions.radius - (Math.cos(this.degToRad(iTick)) * gaugeOptions.radius);
        innerTickY = gaugeOptions.radius - (Math.sin(this.degToRad(iTick)) * gaugeOptions.radius);

        // Some cludging to center the values (TODO: Improve)
        if (iTick <= 10) {
            options.ctx.fillText(iTickToPrint, (options.center.X - gaugeOptions.radius - 12) + innerTickX,
                    (gaugeOptions.center.Y - gaugeOptions.radius - 12) + innerTickY + 5);
        } else if (iTick < 50) {
            options.ctx.fillText(iTickToPrint, (options.center.X - gaugeOptions.radius - 12) + innerTickX - 5,
                    (gaugeOptions.center.Y - gaugeOptions.radius - 12) + innerTickY + 5);
        } else if (iTick < 90) {
            options.ctx.fillText(iTickToPrint, (options.center.X - gaugeOptions.radius - 12) + innerTickX,
                    (gaugeOptions.center.Y - gaugeOptions.radius - 12) + innerTickY);
        } else if (iTick === 90) {
            options.ctx.fillText(iTickToPrint, (options.center.X - gaugeOptions.radius - 12) + innerTickX + 4,
                    (gaugeOptions.center.Y - gaugeOptions.radius - 12) + innerTickY);
        } else if (iTick < 145) {
            options.ctx.fillText(iTickToPrint, (options.center.X - gaugeOptions.radius - 12) + innerTickX + 10,
                    (gaugeOptions.center.Y - gaugeOptions.radius - 12) + innerTickY);
        } else {
            options.ctx.fillText(iTickToPrint, (options.center.X - gaugeOptions.radius - 12) + innerTickX + 15,
                    (gaugeOptions.center.Y - gaugeOptions.radius - 12) + innerTickY + 5);
        }

        // MPH increase by 10 every 20 degrees
        //iTickToPrint += Math.round(2160 / 9);
         iTickToPrint += 10;
    }

    options.ctx.stroke();
}

 drawSpeedometerPart(options, alphaValue, strokeStyle, startPos) {
    /* Draw part of the arc that represents
    * the colour speedometer arc
    */

    options.ctx.beginPath();

    options.ctx.globalAlpha = alphaValue;
    options.ctx.lineWidth = 16;
    options.ctx.strokeStyle = strokeStyle;

    options.ctx.arc(options.center.X,
        options.center.Y,
        options.levelRadius,
        Math.PI + (Math.PI / 360 * startPos),
        0 - (Math.PI / 360 * 10),
        false);

    options.ctx.stroke();
}

 drawSpeedometerColourArc(options) {
    /* Draws the colour arc.  Three different colours
     * used here; thus, same arc drawn 3 times with
     * different colours.
     * TODO: Gradient possible?
     */

    var startOfGreen = 10,
        endOfGreen = 200,
        endOfOrange = 280;
    //Escalas
        this.drawSpeedometerPart(options, 1.0, "rgb(254,199,10)", startOfGreen);
        this.drawSpeedometerPart(options, 0.9, "rgb(254,199,10)", endOfGreen);
        this.drawSpeedometerPart(options, 0.9, "rgb(254,199,10) ", endOfOrange);

}

 drawNeedleDial(options, alphaValue, strokeStyle, fillStyle) {
    /* Draws the metallic dial that covers the base of the
    * needle.
    */
    var i = 0;

    options.ctx.globalAlpha = alphaValue;
    options.ctx.lineWidth = 3;
    options.ctx.strokeStyle = strokeStyle;
    options.ctx.fillStyle = fillStyle;

    // Draw several transparent circles with alpha
    for (i = 0; i < 30; i++) {

        options.ctx.beginPath();
        options.ctx.arc(options.center.X,
            options.center.Y,
            i,
            0,
            Math.PI,
            true);

        options.ctx.fill();
        options.ctx.stroke();
    }
}

 convertSpeedToAngle(options) {
    /* Helper function to convert a speed to the
    * equivelant angle.
    */
    var iSpeed = (options.speed / 10),
        iSpeedAsAngle = ((iSpeed * 20) + 10) % 180;

    // Ensure the angle is within range
    if (iSpeedAsAngle > 180) {
        iSpeedAsAngle = iSpeedAsAngle - 180;
    } else if (iSpeedAsAngle < 0) {
        iSpeedAsAngle = iSpeedAsAngle + 180;
    }

    return iSpeedAsAngle;
}

 drawNeedle(options) {
    /* Draw the needle in a nice read colour at the
    * angle that represents the options.speed value.
    */

    var iSpeedAsAngle = this.convertSpeedToAngle(options),
        iSpeedAsAngleRad = this.degToRad(iSpeedAsAngle),
        gaugeOptions = options.gaugeOptions,
        innerTickX = gaugeOptions.radius - (Math.cos(iSpeedAsAngleRad) * 20),
        innerTickY = gaugeOptions.radius - (Math.sin(iSpeedAsAngleRad) * 20),
        fromX = (options.center.X - gaugeOptions.radius) + innerTickX,
        fromY = (gaugeOptions.center.Y - gaugeOptions.radius) + innerTickY,
        endNeedleX = gaugeOptions.radius - (Math.cos(iSpeedAsAngleRad) * gaugeOptions.radius),
        endNeedleY = gaugeOptions.radius - (Math.sin(iSpeedAsAngleRad) * gaugeOptions.radius),
        toX = (options.center.X - gaugeOptions.radius) + endNeedleX,
        toY = (gaugeOptions.center.Y - gaugeOptions.radius) + endNeedleY,
        line = this.createLine(fromX, fromY, toX, toY, "rgb(153, 153, 153)", 5, 0.6);//Ponteiro

        this.drawLine(options, line);

    // Two circle to draw the dial at the base (give its a nice effect?)
    this.drawNeedleDial(options, 0.6, "rgb(153, 153, 153)", "rgb(255,255,255)");
    this.drawNeedleDial(options, 0.2, "rgb(255, 255, 255)", "rgb(153,153,153)");

}

 buildOptionsAsJSON(canvas, iSpeed) {
    /* Setting for the speedometer
    * Alter these to modify its look and feel
    */

    var centerX = 100,
        centerY = 100,
        radius = 75,
        outerRadius = 100;

    // Create a speedometer object using Javascript object notation
    return {
        ctx: canvas.getContext('2d'),
        speed: iSpeed,
        center:    {
            X: centerX,
            Y: centerY
        },
        levelRadius: radius - 5,
        gaugeOptions: {
            center:    {
                X: centerX,
                Y: centerY
            },
            radius: radius
        },
        radius: outerRadius
    };
}

 clearCanvas(options) {
    options.ctx.clearRect(0, 0, 800, 600);
    this.applyDefaultContextSettings(options);
}

 draw() {
    /* Main entry point for drawing the speedometer
    * If canvas is not support alert the user.
    */
        
    console.log('Target: ' + this.iTargetSpeed);
    console.log('Current: ' + this.iCurrentSpeed);
    
    var canvas = document.getElementById(this.id),
        options = null;

    // Canvas good?
    if (canvas !== null && canvas.getContext) {
        options = this.buildOptionsAsJSON(canvas, this.iCurrentSpeed);

        // Clear canvas
        this.clearCanvas(options);

        // Draw the metallic styled edge
        this.drawMetallicArc(options);

        // Draw thw background
        this.drawBackground(options);

        // Draw tick marks
        this.drawTicks(options);

        // Draw labels on markers
        this.drawTextMarkers(options);

        // Draw speeometer colour arc
        this.drawSpeedometerColourArc(options);

        // Draw the needle and base
        this.drawNeedle(options);
        
    } else {
        alert("Canvas not supported by your browser!");
    }
    
    if(this.iTargetSpeed == this.iCurrentSpeed) {
        clearTimeout(this.job);
        return;
    } else if(this.iTargetSpeed < this.iCurrentSpeed) {
        this.bDecrement = true;
    } else if(this.iTargetSpeed > this.iCurrentSpeed) {
        this.bDecrement = false;
    }
    
    if(this.bDecrement) {
        if(this.iCurrentSpeed - 10 < this.iTargetSpeed)
        this.iCurrentSpeed = this.iCurrentSpeed - 1;
        else
        this.iCurrentSpeed = this.iCurrentSpeed - 5;
    } else {
    
        if(this.iCurrentSpeed + 10 > this.iTargetSpeed)
        this.iCurrentSpeed = this.iCurrentSpeed + 1;
        else
        this.iCurrentSpeed = this.iCurrentSpeed + 5;
    }
    
    this.job = setTimeout(this.draw(), 5);
}

 drawWithInputValue(value) {

    if (value !== null) {

        this.iTargetSpeed = value*0.8;

        // Sanity checks
        if (isNaN(this.iTargetSpeed)) {
            this. iTargetSpeed = 0;
        } else if (this.iTargetSpeed < 0) {
            this.iTargetSpeed = 0;
        } else if (this.iTargetSpeed > 100) {
            this.iTargetSpeed = 100;
        }

        this.job = setTimeout(this.draw(), 5);
 
    }
}

}

