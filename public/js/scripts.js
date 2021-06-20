pspZoom = (val, max) ->
  (val / max) * (-25) + 12.5

if !Modernizr.touch
  $(".grid .hoveritem")
    .mouseenter (e) ->
      @.delayStamp = new Date()
      @.lastRatio = 0
      $(@).find('img')
        .css({
        '-webkit-transform': "scale3D(1.5, 1.5, 1)"
        '-moz-transform': "scale3D(1.5, 1.5, 1)"
        '-ms-transform': "scale3D(1.5, 1.5, 1)"
        '-o-transform': "scale3D(1.5, 1.5, 1)"
        'transform': "scale3D(1.5, 1.5, 1)"
      })
    
    .mousemove (e) ->
      timeDiff = (new Date() - @.delayStamp)
      ratio = if timeDiff > 300 then 1.0 else (timeDiff / 300)
        # the next is the "limiter" - basically just makes sure there's no jumps
      ratio = if (ratio - @.lastRatio) > 0.08 then @.lastRatio + 0.075 else ratio 
      @.lastRatio = ratio;
      
      offset = $(@).offset();
      x = pspZoom(e.pageX - offset.left, $(@).width())
      y = pspZoom(e.pageY - offset.top, $(@).height())
      
      $(@).find('img').css({
        'left': "#{ratio * x}%"
        'top': "#{ratio * 5 * y}px"
      })
      
    .mouseleave ->
      $(@).find('img')
        .attr("data-translate-delay-stamp", "-1")
        .css({
        '-webkit-transform': "scale3D(1, 1, 1)"
        '-moz-transform': "scale3D(1, 1, 1)"
        '-ms-transform': "scale3D(1, 1, 1)"
        '-o-transform': "scale3D(1, 1, 1)"
        'transform': "scale3D(1, 1, 1)"
        'left': "0"
        'top': "0"
        })