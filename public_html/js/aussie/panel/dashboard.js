function  setupGraphs() {

    var totalpositions = data.positions.length;
    var wins =[];
    var loses =[];
    var total = [];
    var graph_height=0;

    wins[0] = 0;
    loses[0] = 0;
    total[0] = 0;
    if(totalpositions==0)
    {
        wins[1]=0;
        wins[2]=0;
        loses[1]=0;
        loses[2]=0;
        total[1]=0;
        total[2]=0;

    }
    //win graph

    for(i=1; i<totalpositions; i++){
        if(data.positions[i].status=='lost'){
           graph_height--;
            wins[i]= graph_height;
        }
        else{
            graph_height++;
            wins[i]= graph_height;

        }
}
    //lose graph

    graph_height=0;
    for(i=1; i<totalpositions; i++){
        if(data.positions[i].status=='lost'){
            graph_height++;
            loses[i]=graph_height;
        }
        else{
            graph_height--;
            loses[i]=graph_height;
        }
    }

    //total-trades and balance graph
    for(i=1; i<totalpositions; i++){
        total[i] = i;

    }




  $('.dynamicsparkline').sparkline(wins, {
    type: 'line',
    lineColor: '#89b1e4',
    fillColor: '#d7e8fc',
    height: '70px',
    width: '350px'
  });
  
    $('.dynamicsparklinelost').sparkline(loses, {
    type: 'line',
    lineColor: '#89b1e4',
    fillColor: '#d7e8fc',
    height: '70px',
    width: '350px'
  });

    $('.dynamicbars').sparkline(total, {
        type: 'bar',
        barColor: '#89b1e4',
        negBarColor: '#c76868',
        height: '70px',
        width: '350px'
    });


    $('.dynamicbarsbalance').sparkline(wins, {
        type: 'bar',
        barColor: '#89b1e4',
        negBarColor: '#c76868',
        height: '70px',
        width: '350px'
    });




}

$(document).ready(function(){
   
    $("#StatisticsModal").on('shown.bs.modal',function(){
         console.log('setup graphs');
         setupGraphs();
        
    })
})