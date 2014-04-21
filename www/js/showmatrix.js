function showmatrix(matrix,order,category1) {

    var margin = {top: 0, right: 0, bottom: 0, left: 0},
        padding = {top: 100, right: 0, bottom: 0, left: 100},
        width = 960 - margin.left - margin.right - padding.left - padding.right,
        height = 550 - margin.top - margin.bottom - padding.top - padding.bottom;
        square = {padding: 0.2}

    var x = d3.scale.linear()
        .range([0, Math.min(width,height)]);

    var y = d3.scale.linear()
        .range([0,Math.min(width,height)]);
        
    var color = d3.scale.linear()
        .domain([0, 35, 55, 75, 100])
        .range(["#880000", "red", "yellow", "green", "green"]);
        
        mpleft = margin.left+padding.left;
        mptop = margin.top+padding.top;

    //and when we have a container, we can fill it:
    $(function(){
      $('#viz').html('');
      var svg = d3.select("#viz").append("svg")
        .attr("width", width + margin.left + margin.right + padding.left + padding.right)
        .attr("height", height + margin.top + margin.bottom + padding.top + padding.bottom)
      .append("g")
        .attr("transform", "translate(" + mpleft + "," + mptop + ")");
        
        
      ncat = Object.keys(matrix).length;
      square['size'] = Math.floor(Math.min(width,height)/ncat);
      square['innersize'] = Math.floor(square['size']*(1-square['padding']));
      
      //domains:
      x.domain([0,ncat]);
      y.domain([0,ncat]);
      
      category1.push(''); //needed to have one more category
      
      var scale = d3.scale.ordinal()
            .domain(category1)
	        .rangePoints([0, Math.floor(Math.min(width,height))]);
	        
      //axes
      var xAxis = d3.svg.axis()
            .scale(scale)
            .orient("bottom");

      var yAxis = d3.svg.axis()
            .scale(scale)
            .orient("right");
            
    //axes content
      var xaxisContent = svg.append("g")
	        .attr("class", "x axis")
	        .attr("transform", "translate(0,-"+ padding.top/2 +")")
	        .attr("font-size", function () {return Math.floor(square['innersize']*.5)+"px"})
	        .call(xAxis);
	        
      svg.selectAll("g.axis text")
         .attr("transform", "rotate(-90)");	    
         
      var yaxisContent = svg.append("g")
            .attr("class", "y axis")
            .attr("transform", "translate(-" + padding.left + ","+square['size']/2+")")
            .attr("font-size", function () {return Math.floor(square['innersize']*.5)+"px"})
            .call(yAxis);
	            

      //reorder 'matrix' for 'data'
      data = matrix2data(matrix,order);

    //create rects
      var rect = svg.selectAll(".rect")
          .data(data)
        .enter().append("g")
          .on("mouseover", function (d, i) {
            icko = i
            svg.selectAll(".rect")
		        .filter(function (d, i) {
			        return ((i % ncat) == (icko % ncat) || Math.floor(i/ ncat) == Math.floor(icko / ncat) ) 
		        })
		        .attr("class", "rect hover")
            yaxisContent.selectAll("text")
		        .filter(function(d, i) {
			        return ((i % ncat) == (icko % ncat))
		        })
		        .attr("class", "hoverBold")

	        xaxisContent.selectAll("text")
		        .filter(function(d, i) {
			        return (i == Math.floor(icko / ncat))
		        })
		        .attr("class", "hoverBold")	
          })
          .on("mouseout", function (d, i) {
	        icko = i
	        svg.selectAll(".rect")
		        .filter(function (d, i) {
			        return ((i % ncat) == (icko % ncat) || Math.floor(i/ ncat) == Math.floor(icko / ncat) ) 
		        })
		        .attr("class", "rect")
	        yaxisContent.selectAll("text")
		        .filter(function(d, i) {
			        return ((i % ncat) == (icko % ncat))
		        })
		        .attr("class", "")		

	        xaxisContent.selectAll("text")
		        .filter(function(d, i) {
			        return (i == Math.floor(icko / ncat))
		        })
		        .attr("class", "")	
          })
          .on("click", function(d,i) {
            ids = [d['id2'],d['id1']];
            $('#modal').modal('show');
          });
          
          
      rect.append("rect")
          .attr("x",function(d) {return x(d.i1);})
          .attr("y",function(d) {return y(d.i2);})
          .attr("width",square['innersize'])
          .attr("height",square['innersize'])
          .style("fill",function(d) {return color(d.val);})
          .attr("class","rect");


      //add text inside
      rect.append("text")
	        .attr("text-anchor", "middle")
	        .text(function (d, i) {
		            return d.val;
	        })
	        .attr("x", function(d, i) {
		        return x(d.i1) + square['innersize']/2;
	        })
	        .attr("y", function(d, i) {
		        return y(d.i2) +  square['innersize']/2 + (square['size'] - square['innersize'])/2;
	        })
	        .attr("class","descr")
	        .attr("font-size", function () {return Math.floor(square['innersize']*.5)+"px"})
	        .on("mouseover", function (d,i) {
	           
	        });	  
	        
      //middle rects
      category = d3.range(category1.length-1);
      var grayrect = svg.selectAll(".grayrect")
          .data(category)
        .enter().append("rect")
          .attr("x",function(d) {
            return x(d);
          })
          .attr("y",function(d) {return y(d);})
          .attr("width",square['innersize'])
          .attr("height",square['innersize'])
          .attr("class",'middle-rect')
          ;      
    });

    function matrix2data(matrix,order) {
      out = [];
      i = 0;
      for (key1 in order) {
        j = 0;
        for (key2 in order) {
          id1 = order[key1];
          id2 = order[key2];
          item = {
            'id1': id1,
            'id2': id2,
            'i1': i,
            'i2': j,
            'val': matrix[id1][id2]
          }
          out.push(item);
          j++;
        }
        i++;
      }
      return out;
    }
}
