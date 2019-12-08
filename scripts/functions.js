var drawGrap = function(){
    nv.addGraph(function() {
        var chart = nv.models.discreteBarChart()
          .x(function(d) { return d.label })
          .y(function(d) { return d.value })
          .staggerLabels(true)
          .tooltips(false)
          .showValues(true)
      
        d3.select('#chart svg')
          .datum(grapData)
          .transition().duration(500)
          .call(chart)
          ;
      
        nv.utils.windowResize(chart.update);
      
        return chart;
      });           
}
var drawGrap2 = function(){
    nv.addGraph(function() {
        var chart = nv.models.discreteBarChart()
          .x(function(d) { return d.label })
          .y(function(d) { return d.value })
          .staggerLabels(true)
          .tooltips(false)
          .showValues(true)
      
        d3.select('#chart2 svg')
          .datum(grapData)
          .transition().duration(500)
          .call(chart)
          ;
      
        nv.utils.windowResize(chart.update);
      
        return chart;
      });           
}
function loadGraps(){
    console.log('draw grap');
    drawGrap();
    drawGrap2();       
}