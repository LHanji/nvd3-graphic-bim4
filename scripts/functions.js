var drawGrap = function(){
    nv.addGraph(function() {
        var chart = nv.models.pieChart()
            .x(function(d) { return d.label })
            .y(function(d) { return d.value })
            .showLabels(true);
      
          d3.select("#chart svg")
              .datum(grapData)
            .transition().duration(1200)
              .call(chart);
        return chart;
    });      
}
$(function(){
    $("#loadGrap").click(function(){
        console.log('draw grap');
        drawGrap();       
    });
});