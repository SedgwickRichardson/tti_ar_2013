function initHomeGraph(lang){

	$('#home-graph-container-1').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 20,
			style: {
				//fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			//min: 2010,
			//max: 2013,
			showFirstLabel: false,
			//showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px',
					//fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			max: 4000,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 1000,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -40,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
					return Highcharts.numberFormat(this.value, 0);
				},
				style: {
					fontSize: '11px',
					//fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> USD'+ Highcharts.numberFormat(this.y, 0) +'m';
            },
			style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				pointWidth: 25,
				//pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px'
						//fontFamily: 'Trade Gothic W01 Roman'
					},
					formatter: function () {
						if(this.y==0)
							return "";
						else
							return Highcharts.numberFormat(this.y, 0, '.', ',');
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:0,x: 2009, color: '#B4C2C9'},
				{y:3383,x: 2010, color: '#B4C2C9'},
				{y:3667,x: 2011, color: '#B4C2C9'},
				{y:3852, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px'/*,fontFamily: 'Trade Gothic W01 Roman'*/}}}
			]
		}],
	});
	
	$('#home-graph-container-2').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 20,
			style: {
				//fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			//min: 2010,
			//max: 2013,
			showFirstLabel: false,
			//showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 30,
			max: 34,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 1,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -40,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 0);
				},
				style: {
					fontSize: '11px'//,
				//	fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> '+ Highcharts.numberFormat(this.y, 1) +'%';
            },
			style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				pointWidth: 25,
				//pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px'//,
						//fontFamily: 'Trade Gothic W01 Roman'
					},
					formatter: function () {
						if(this.y==0)
							return "";
						else
							return this.y;
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:0,x: 2009, color: '#B4C2C9'},
				{y:32.2,x: 2010, color: '#B4C2C9'},
				{y:32.6,x: 2011, color: '#B4C2C9'},
				{y:33.5, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px'/* ,fontFamily: 'Trade Gothic W01 Roman' */}}}
			],
			formatter: function () {
				return Highcharts.numberFormat(this.y, 1, '.', ',');
			}
		}],
	});
	
	$('#home-graph-container-3').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 20,
			style: {
				//fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			//min: 2010,
			//max: 2013,
			showFirstLabel: false,
			//showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			max: 300,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 100,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -40,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 0);
				},
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> USD'+Highcharts.numberFormat(this.y, 0) +'m';
            },
			style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				pointWidth: 25,
				//pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px'//,
						//fontFamily: 'Trade Gothic W01 Roman'
					},
					formatter: function () {
						if(this.y==0)
							return "";
						else
							return this.y;
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:0,x: 2009, color: '#B4C2C9'},
				{y:168,x: 2010, color: '#B4C2C9'},
				{y:219,x: 2011, color: '#B4C2C9'},
				{y:260, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px'/* ,fontFamily: 'Trade Gothic W01 Roman' */}}}
			]
		}],
	});
	
	$('#home-graph-container-4').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 20,
			style: {
				//fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			//min: 2010,
			//max: 2013,
			showFirstLabel: false,
			//showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			max: 12,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 3,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -40,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 0);
				},
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> US'+ Highcharts.numberFormat(this.y, 2) +' cents';
            },
			style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				pointWidth: 25,
				//pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px',
						//fontFamily: 'Trade Gothic W01 Roman'
					},
					formatter: function () {
						if(this.y==0)
							return "";
						else
							return this.y;
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:0,x: 2009, color: '#B4C2C9'},
				{y:5.97,x: 2010, color: '#B4C2C9'},
				{y:9.47,x: 2011, color: '#B4C2C9'},
				{y:11.42, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px'/* ,fontFamily: 'Trade Gothic W01 Roman' */}}}
			]
		}],
	});
	
	$('#home-graph-container-5').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 20,
			style: {
				fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			min: 2010,
			max: 2013,
			showFirstLabel: false,
			showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 0.5,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -25,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 1);
				},
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> US'+ this.y +' cents';
            },
			style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				pointWidth: 25,
				//pointPadding: 0.2,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px'//,
						//fontFamily: 'Trade Gothic W01 Roman'
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:2.25, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px'/* ,fontFamily: 'Trade Gothic W01 Roman' */}}}
			]
			 
		}],
	});
	
	$('#home-graph-container-6').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 20,
			style: {
				//fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			min: 2010,
			max: 2013,
			showFirstLabel: false,
			showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			max: 12,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 3,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -25,
			showFirstLabel: false,
			labels: 
			{
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> US'+ this.y +' cents';
            },
			style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				pointWidth: 25,
				//pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px'//,
						//fontFamily: 'Trade Gothic W01 Roman'
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:9.47,x: 2011, color: '#B4C2C9'},
				{y:11.42, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px'/* ,fontFamily: 'Trade Gothic W01 Roman' */}}}
			]
			 
		}],
	});
	
	Highcharts.setOptions({
     colors: ['#37596A', '#B4C2C9']
    });
	var tip1,tip2;
	if(lang=="en"){
		tip1 = "North America";
		tip2 = "Europe,<br>rest of the world"
	}
	else
	{
		tip1 = "北美洲";
		tip2 = "歐洲、其他地區"
	}
	
	$('#home-graph-container-7').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
				spacingTop: 0,
				spacingBottom: 5,
				spacingLeft: 0,
				spacingRight: 0,
				marginRight: 5
            },
            title: {
                text: null
            },
            tooltip: {
        	    formatter: function() {
                    return '<b>'+this.percentage+'%</b><br>'+this.point.name;
                },
				style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364",
					padding:"4px"
				},
				useHTML: true
            },
            plotOptions: {
                pie: {
					center: [40, 40]
                }
            },
            series: [{
                type: 'pie',
                innerSize: '85%',
                showInLegend:false,
				data: [
                    [tip1,   72.9],
                    [tip2,  27.1]
                ],
				dataLabels: {
                    enabled: false
                }
            }],
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			}
		});
		
	if(lang=="en"){
		tip1 = "Europe";
		tip2 = "North America,<br>rest of the world"
	}
	else
	{
		tip1 = "歐洲";
		tip2 = "北美洲、其他地區"
	}
	
	$('#home-graph-container-8').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
				spacingTop: 0,
				spacingBottom: 5,
				spacingLeft: 0,
				spacingRight: 0,
				marginRight: 5
            },
            title: {
                text: null
            },
            tooltip: {
        	    formatter: function() {
                    return '<b>'+this.percentage+'%</b><br>'+this.point.name;
                },
				style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364",
					padding:"4px"
				},
				useHTML: true
            },
            plotOptions: {
                pie: {
					center: [40, 40]
                }
            },
            series: [{
                type: 'pie',
                innerSize: '85%',
                showInLegend:false,
				data: [
                    [tip1,   19.9],
                    [tip2,  80.1]
                ],
				dataLabels: {
                    enabled: false
                },
				startAngle: 262
            }],
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			}
		});
		
	if(lang=="en"){
		tip1 = "Rest of the world";
		tip2 = "North America,<br>Europe";
	}
	else
	{
		tip1 = "其他地區";
		tip2 = "北美洲、歐洲"
	}
	
	$('#home-graph-container-9').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
				spacingTop: 0,
				spacingBottom: 5,
				spacingLeft: 0,
				spacingRight: 0,
				marginRight: 5
            },
            title: {
                text: null
            },
            tooltip: {
        	    formatter: function() {
                    return '<b>'+Highcharts.numberFormat(this.percentage, 1, '.', ',')+'%</b><br>'+this.point.name;
                },
				style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364",
					padding:"4px"
				},
				useHTML: true
            },
            plotOptions: {
                pie: {
					center: [40, 40]
                }
            },
            series: [{
                type: 'pie',
                innerSize: '85%',
                showInLegend:false,
				data: [
                    [tip1,   7.2],
                    [tip2,  92.8]
                ],
				dataLabels: {
                    enabled: false
                },
				startAngle: 334
            }],
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			}
		});
		
		$('#home-graph-container-10').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 15,
			style: {
				//fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			min: 2009,
			max: 2012,
			showFirstLabel: false,
			//showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 1000,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -40,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 0);
				},
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> USD'+ Highcharts.numberFormat(this.y, 0) +'m';
            },
			style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				//pointWidth: 30,
				pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px'//,
						//fontFamily: 'Trade Gothic W01 Roman'
					},
					formatter: function () {
						if(this.y==0)
							return "";
						else
							return Highcharts.numberFormat(this.y, 0, '.', ',');
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:0,x: 2009, color: '#B4C2C9'},
				{y:2461,x: 2010, color: '#B4C2C9'},
				{y:2648,x: 2011, color: '#B4C2C9'},
				{y:2807, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px'/* ,fontFamily: 'Trade Gothic W01 Roman' */}}}
			]
			 
		}],
	});
	
	$('#home-graph-container-11').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 20,
			style: {
				//fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			min: 2009,
			max: 2012,
			showFirstLabel: false,
			//showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			max: 800,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 200,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -40,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 0);
				},
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> USD'+ this.y +'m';
            },
			style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				//pointWidth: 30,
				pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px'//,
						//fontFamily: 'Trade Gothic W01 Roman'
					},
					formatter: function () {
						if(this.y==0)
							return "";
						else
							return Highcharts.numberFormat(this.y, 0, '.', ',');
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:0,x: 2009, color: '#B4C2C9'},
				{y:713,x: 2010, color: '#B4C2C9'},
				{y:764,x: 2011, color: '#B4C2C9'},
				{y:768, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px'/* ,fontFamily: 'Trade Gothic W01 Roman' */}}}
			]
			 
		}],
	});
	
	$('#home-graph-container-12').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 20,
			style: {
				//fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			min: 2009,
			max: 2012,
			showFirstLabel: false,
			//showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px',
					//fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			max: 300,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 100,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -40,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 0);
				},
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> USD'+ this.y +'m';
            },
			style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				//pointWidth: 30,
				pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px'//,
						//fontFamily: 'Trade Gothic W01 Roman'
					},
					formatter: function () {
						if(this.y==0)
							return "";
						else
							return Highcharts.numberFormat(this.y, 0, '.', ',');
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:0,x: 2009, color: '#B4C2C9'},
				{y:209,x: 2010, color: '#B4C2C9'},
				{y:255,x: 2011, color: '#B4C2C9'},
				{y:277, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px'/* ,fontFamily: 'Trade Gothic W01 Roman' */}}}
			]
			 
		}],
	});
	
	Highcharts.setOptions({
     colors: ['#37596A', '#B4C2C9']
    });
	if(lang=="en"){
		tip1 = "Power<br>Equipment";
		tip2 = "Floor Care<br>and Appliances"
	}
	else
	{
		tip1 = "電動工具";
		tip2 = "地板護理及器具"
	}
	
	$('#home-graph-container-13').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
				spacingTop: 0,
				spacingBottom: 0,
				spacingLeft: 0,
				spacingRight: 0,
				marginRight: 5,
            },
            title: {
                text: null
            },
            tooltip: {
        	    formatter: function() {
                    return '<b>'+this.percentage+'%</b><br>'+this.point.name;
                },
				style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
				}
            },
            plotOptions: {
                pie: {
					center: [40, 40]
                }
            },
			series: [{
                type: 'pie',
                innerSize: '85%',
                showInLegend:false,
				data: [
                    [tip1,   74.4],
                    [tip2,  25.6]
                ],
				dataLabels: {
                    enabled: false
                },
				startAngle: 92
            }],
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			},
		});

	if(lang=="en"){
		tip1 = "Power<br>Equipment";
		tip2 = "Floor Care<br>and Appliances"
	}
	else
	{
		tip1 = "電動工具";
		tip2 = "地板護理及器具"
	}
	$('#home-graph-container-14').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
				spacingTop: 0,
				spacingBottom: 0,
				spacingLeft: 0,
				spacingRight: 0,
				marginRight: 5,
            },
            title: {
                text: null
            },
            tooltip: {
        	    formatter: function() {
                    return '<b>'+this.percentage+'%</b><br>'+this.point.name;
                },
				style: {
				//	fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
				}
            },
            plotOptions: {
                pie: {
					center: [40, 40]
                }
            },
            series: [{
                type: 'pie',
                innerSize: '85%',
                showInLegend:false,
				data: [
					[tip2,  25.6],
                    [tip1,   74.4]
                    
                ],
				dataLabels: {
                    enabled: false
                },
				startAngle: 92
            }],
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			},
		});
}

function initFinancialHighlights(){
	$('#graph-container-1').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 10,
			style: {
				fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			//min: 2010,
			//max: 2013,
			showFirstLabel: false,
			//showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			max: 4000,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 1000,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -40,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 0);
				},
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> USD'+ Highcharts.numberFormat(this.y, 0) +'m';
            },
			style: {
					fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				pointWidth: 25,
				//pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px',
						fontFamily: 'Trade Gothic W01 Roman'
					},
					formatter: function () {
						if(this.y==0)
							return "";
						else
							return Highcharts.numberFormat(this.y, 0, '.', ',');
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:0,x: 2009, color: '#B4C2C9'},
				{y:3383,x: 2010, color: '#B4C2C9'},
				{y:3667,x: 2011, color: '#B4C2C9'},
				{y:3852, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px',fontFamily: 'Trade Gothic W01 Roman'}}}
			]
		}],
	});
	
	$('#graph-container-2').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 10,
			style: {
				fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			//min: 2010,
			//max: 2013,
			showFirstLabel: false,
			//showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			max: 40,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 10,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -40,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 0);
				},
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> '+ Highcharts.numberFormat(this.y, 1) +'%';
            },
			style: {
					fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				pointWidth: 25,
				//pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px',
						fontFamily: 'Trade Gothic W01 Roman'
					},
					formatter: function () {
						if(this.y==0)
							return "";
						else
							return this.y;
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:0,x: 2009, color: '#B4C2C9'},
				{y:32.2,x: 2010, color: '#B4C2C9'},
				{y:32.6,x: 2011, color: '#B4C2C9'},
				{y:33.5, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px',fontFamily: 'Trade Gothic W01 Roman'}}}
			],
			formatter: function () {
				return Highcharts.numberFormat(this.y, 1, '.', ',');
			}
		}],
	});
	
	$('#graph-container-3').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 10,
			style: {
				fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			//min: 2010,
			//max: 2013,
			showFirstLabel: false,
			//showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			max: 300,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 100,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -40,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 0);
				},
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> USD'+Highcharts.numberFormat(this.y, 0) +'m';
            },
			style: {
					fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				pointWidth: 25,
				//pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px',
						fontFamily: 'Trade Gothic W01 Roman'
					},
					formatter: function () {
						if(this.y==0)
							return "";
						else
							return this.y;
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:0,x: 2009, color: '#B4C2C9'},
				{y:168,x: 2010, color: '#B4C2C9'},
				{y:219,x: 2011, color: '#B4C2C9'},
				{y:260, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px',fontFamily: 'Trade Gothic W01 Roman'}}}
			]
		}],
	});
	
	$('#graph-container-4').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 10,
			style: {
				fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			//min: 2010,
			//max: 2013,
			showFirstLabel: false,
			//showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			max: 12,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 3,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -40,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 0);
				},
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> US'+ Highcharts.numberFormat(this.y, 2) +' cents';
            },
			style: {
					fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				pointWidth: 25,
				//pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px',
						fontFamily: 'Trade Gothic W01 Roman'
					},
					formatter: function () {
						if(this.y==0)
							return "";
						else
							return this.y;
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:0,x: 2009, color: '#B4C2C9'},
				{y:5.97,x: 2010, color: '#B4C2C9'},
				{y:9.47,x: 2011, color: '#B4C2C9'},
				{y:11.42, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px',fontFamily: 'Trade Gothic W01 Roman'}}}
			]
		}],
	});
	
}
function initOperationalHighlightsGraph(lang){
	Highcharts.setOptions({
     colors: ['#37596A', '#B4C2C9']
    });
	var tip1,tip2;
	if(lang=="en"){
		tip1 = "Power<br>Equipment";
		tip2 = "Floor Care<br>and Appliances"
	}
	else
	{
		tip1 = "電動工具";
		tip2 = "地板護理及器具"
	}
	
	$('#op-hl-graph-container-1').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
				spacingTop: 0,
				spacingBottom: 5,
				spacingLeft: 0,
				spacingRight: 0,
				marginRight: 0,
				backgroundColor: "#F5F7F8"
            },
            title: {
                text: null
            },
            tooltip: {
        	    formatter: function() {
                    return '<b>'+this.percentage+'%</b><br>'+this.point.name;
                },
				style: {
					fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364",
					padding:"4px"
				},
				useHTML: true
            },
            plotOptions: {
                pie: {
					center: [45, 45]
                }
            },
            series: [{
                type: 'pie',
                innerSize: '85%',
                showInLegend:false,
				data: [
                    [tip1,   74.4],
                    [tip2,  25.6]
                ],
				dataLabels: {
                    enabled: false
                }
            }],
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			}
		});
	Highcharts.setOptions({
     colors: ['#B4C2C9', '#37596A']
    });
	$('#op-hl-graph-container-2').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
				spacingTop: 0,
				spacingBottom: 5,
				spacingLeft: 0,
				spacingRight: 0,
				marginRight: 0,
				backgroundColor: "#F5F7F8"
            },
            title: {
                text: null
            },
            tooltip: {
        	    formatter: function() {
                    return '<b>'+this.percentage+'%</b><br>'+this.point.name;
                },
				style: {
					fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364",
					padding:"4px"
				},
				useHTML: true
            },
            plotOptions: {
                pie: {
					center: [45, 45]
                }
            },
            series: [{
                type: 'pie',
                innerSize: '85%',
                showInLegend:false,
				data: [
                    [tip1,   74.4],
                    [tip2,  25.6]
                ],
				dataLabels: {
                    enabled: false
                }
            }],
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			}
		});
		
		Highcharts.setOptions({
     colors: ['#37596A', '#B4C2C9']
    });
	
	
	if(lang=="en"){
		tip1 = "North America";
		tip2 = "Europe,<br>rest of the world"
	}
	else
	{
		tip1 = "北美洲";
		tip2 = "歐洲、其他地區"
	}
	
	$('#op-hl-graph-container-3').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
				spacingTop: 0,
				spacingBottom: 5,
				spacingLeft: 0,
				spacingRight: 0,
				marginRight: 5
            },
            title: {
                text: null
            },
            tooltip: {
        	    formatter: function() {
                    return '<b>'+this.percentage+'%</b><br>'+this.point.name;
                },
				style: {
					fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364",
					padding:"4px"
				},
				useHTML: true
            },
            plotOptions: {
                pie: {
					center: [40, 40]
                }
            },
            series: [{
                type: 'pie',
                innerSize: '85%',
                showInLegend:false,
				data: [
                    [tip1,   72.9],
                    [tip2,  27.1]
                ],
				dataLabels: {
                    enabled: false
                }
            }],
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			}
		});
		
	if(lang=="en"){
		tip1 = "Europe";
		tip2 = "North America,<br>rest of the world"
	}
	else
	{
		tip1 = "歐洲";
		tip2 = "北美洲、其他地區"
	}
	
	$('#op-hl-graph-container-4').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
				spacingTop: 0,
				spacingBottom: 5,
				spacingLeft: 0,
				spacingRight: 0,
				marginRight: 5
            },
            title: {
                text: null
            },
            tooltip: {
        	    formatter: function() {
                    return '<b>'+this.percentage+'%</b><br>'+this.point.name;
                },
				style: {
					fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364",
					padding:"4px"
				},
				useHTML: true
            },
            plotOptions: {
                pie: {
					center: [40, 40]
                }
            },
            series: [{
                type: 'pie',
                innerSize: '85%',
                showInLegend:false,
				data: [
                    [tip1,   19.9],
                    [tip2,  80.1]
                ],
				dataLabels: {
                    enabled: false
                },
				startAngle: 262
            }],
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			}
		});
		
	if(lang=="en"){
		tip1 = "Rest of the world";
		tip2 = "North America,<br>Europe";
	}
	else
	{
		tip1 = "其他地區";
		tip2 = "北美洲、歐洲"
	}
	
	$('#op-hl-graph-container-5').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
				spacingTop: 0,
				spacingBottom: 5,
				spacingLeft: 0,
				spacingRight: 0,
				marginRight: 5
            },
            title: {
                text: null
            },
            tooltip: {
        	    formatter: function() {
                    return '<b>'+Highcharts.numberFormat(this.percentage, 1, '.', ',')+'%</b><br>'+this.point.name;
                },
				style: {
					fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364",
					padding:"4px"
				},
				useHTML: true
            },
            plotOptions: {
                pie: {
					center: [40, 40]
                }
            },
            series: [{
                type: 'pie',
                innerSize: '85%',
                showInLegend:false,
				data: [
                    [tip1,   7.2],
                    [tip2,  92.8]
                ],
				dataLabels: {
                    enabled: false
                },
				startAngle: 334
            }],
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			}
		});
		
	$('#chairman-graph-container-6').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 10,
			style: {
				fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			min: 2009,
			max: 2012,
			showFirstLabel: false,
			//showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 1000,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -40,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 0);
				},
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
				return '<b>'+this.point.category +'</b> USD'+ Highcharts.numberFormat(this.y, 0) +'m';
            },
			style: {
					fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				//pointWidth: 30,
				pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px',
						fontFamily: 'Trade Gothic W01 Roman'
					},
					formatter: function () {
						if(this.y==0)
							return "";
						else
							return Highcharts.numberFormat(this.y, 0, '.', ',');
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:0,x: 2009, color: '#B4C2C9'},
				{y:2461,x: 2010, color: '#B4C2C9'},
				{y:2648,x: 2011, color: '#B4C2C9'},
				{y:2807, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px',fontFamily: 'Trade Gothic W01 Roman'}}}
			]
			 
		}],
	});
	
	$('#chairman-graph-container-7').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 10,
			style: {
				fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			min: 2009,
			max: 2012,
			showFirstLabel: false,
			//showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			max: 800,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 200,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -40,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 0);
				},
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> USD'+ this.y +'m';
            },
			style: {
					fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				//pointWidth: 30,
				pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px',
						fontFamily: 'Trade Gothic W01 Roman'
					},
					formatter: function () {
						if(this.y==0)
							return "";
						else
							return Highcharts.numberFormat(this.y, 0, '.', ',');
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:0,x: 2009, color: '#B4C2C9'},
				{y:713,x: 2010, color: '#B4C2C9'},
				{y:764,x: 2011, color: '#B4C2C9'},
				{y:768, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px',fontFamily: 'Trade Gothic W01 Roman'}}}
			]
			 
		}],
	});
	
	$('#chairman-graph-container-8').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 0,
			marginTop: 10,
			style: {
				fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			min: 2009,
			max: 2012,
			showFirstLabel: false,
			//showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			max: 300,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 100,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -40,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 0);
				},
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> USD'+ this.y +'m';
            },
			style: {
					fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				//pointWidth: 30,
				pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px',
						fontFamily: 'Trade Gothic W01 Roman'
					},
					formatter: function () {
						if(this.y==0)
							return "";
						else
							return Highcharts.numberFormat(this.y, 0, '.', ',');
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:0,x: 2009, color: '#B4C2C9'},
				{y:209,x: 2010, color: '#B4C2C9'},
				{y:255,x: 2011, color: '#B4C2C9'},
				{y:277, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px',fontFamily: 'Trade Gothic W01 Roman'}}}
			]
			 
		}],
	});
}

function initChairmanGraph(){
	$('#chairman-graph-container-1').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 53,
			marginTop: 10,
			style: {
				//fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			min: 2010,
			max: 2013,
			showFirstLabel: false,
			showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 0.5,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -25,
			showFirstLabel: false,
			labels: 
			{
				formatter: function () {
                    return Highcharts.numberFormat(this.value, 1);
				},
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> US'+ this.y +' cents';
            },
			style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				//pointWidth: 30,
				pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px'//,
						//fontFamily: 'Trade Gothic W01 Roman'
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:2.25, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px',fontFamily: 'Trade Gothic W01 Roman'}}}
			]
			 
		}],
	});
	
	$('#chairman-graph-container-2').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 3,
			spacingLeft: 0,
			spacingRight: 0,
			marginRight: 53,
			marginTop: 10,
			style: {
				//fontFamily: 'Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			/*categories: [
				'2011',
				'2012'
			],*/
			categories: [],
			tickWidth: 0,
			lineColor: "#4b6a79",
			lineWidth: 2,
			maxPadding: 0.25,
			min: 2010,
			max: 2013,
			showFirstLabel: false,
			showLastLabel: false,
			labels: {
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				},
				formatter: function () {
					if (this.value == 2012) {
						return '<b>' + this.value + '</b>';
					} else {
						return this.value;
					}
				}	
			}
			
		},
		yAxis: {
			min: 0,
			max: 12,
			title: {text:""},
			labels: {enabled:true},
			gridLineWidth: 0,
			tickWidth: 2,
			tickInterval: 3,
			lineWidth: 2,
			lineColor: "#4b6a79",
			offset: -25,
			showFirstLabel: false,
			labels: 
			{
				style: {
					fontSize: '11px'//,
					//fontFamily: 'Trade Gothic W01 Roman'
				}
			},
			tickColor: "#4b6a79"
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return '<b>'+this.point.category +'</b> US'+ this.y +' cents';
            },
			style: {
					//fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
			}
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				//pointWidth: 30,
				pointPadding: 0.1,
				dataLabels: {
					enabled: true,
					color: '#2F5364',
					align: 'center',
					x: 0,
					y: 0,
					style: {
						fontSize: '11px'//,
						//fontFamily: 'Trade Gothic W01 Roman'
					}
				}
				//groupPadding: 0.2
			}
		},
		series: [{
			name: 'Population',
			data: [
				//{y:1.64,x: 2011, color: '#B4C2C9'},
				{y:9.47,x: 2011, color: '#B4C2C9'},
				{y:11.42, x: 2012, color: '#37596A', dataLabels:{style: {fontWeight: 'bold',fontSize: '11px',fontFamily: 'Trade Gothic W01 Roman'}}}
			]
			 
		}],
	});
}

function initPowerEquipmentHighlightsGraph(lang){
	Highcharts.setOptions({
     colors: ['#FAA519', '#B4C2C9']
    });
	var tip1,tip2;
	if(lang=="en"){
		tip1 = "Power Equipment";
		tip2 = "Floor Care and Appliances"
	}
	else
	{
		tip1 = "電動工具";
		tip2 = "地板護理及器具"
	}
	
	$('#power-hl-graph-container-1').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
				spacingTop: 0,
				spacingBottom: 0,
				spacingLeft: 0,
				spacingRight: 0,
				marginRight: 5,
            },
            title: {
                text: null
            },
            tooltip: {
        	    formatter: function() {
                    return '<b>'+this.percentage+'%</b> '+this.point.name;
                },
				style: {
					fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
				}
            },
            plotOptions: {
                pie: {
					center: [40, 40]
                }
            },
			series: [{
                type: 'pie',
                innerSize: '85%',
                showInLegend:false,
				data: [
                    [tip1,   74.4],
                    [tip2,  25.6]
                ],
				dataLabels: {
                    enabled: false
                },
				startAngle: 92
            }],
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			},
		});
}
function initFloorCareHighlightsGraph(lang){
	Highcharts.setOptions({
     colors: ['#FAA519','#B4C2C9']
    });
	var tip1,tip2;
	if(lang=="en"){
		tip1 = "Power Equipment";
		tip2 = "Floor Care and Appliances"
	}
	else
	{
		tip1 = "電動工具";
		tip2 = "地板護理及器具"
	}
	$('#floor-hl-graph-container-1').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
				spacingTop: 0,
				spacingBottom: 0,
				spacingLeft: 0,
				spacingRight: 0,
				marginRight: 5,
            },
            title: {
                text: null
            },
            tooltip: {
        	    formatter: function() {
                    return '<b>'+this.percentage+'%</b> '+this.point.name;
                },
				style: {
					fontFamily: 'Trade Gothic W01 Roman',
					color: "#2F5364"
				}
            },
            plotOptions: {
                pie: {
					center: [40, 40]
                }
            },
            series: [{
                type: 'pie',
                innerSize: '85%',
                showInLegend:false,
				data: [
					[tip2,  25.6],
                    [tip1,   74.4]
                    
                ],
				dataLabels: {
                    enabled: false
                },
				startAngle: 92
            }],
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			},
		});
}
function initGraph(){
	
	
	$('#graph-container-1').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 0,
			spacingLeft: 0,
			spacingRight: 0,
			style: {
				fontFamily: '11px Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		/*colors: [{
			pattern: 'http://tti-ar2012.sedgwick-richardson.net/wp-content/uploads/2013/graph-pattern-1.gif',
			width: 8,
			height: 9
			},
			{
			pattern: 'http://tti-ar2012.sedgwick-richardson.net/wp-content/uploads/2013/graph-pattern-1.gif',
			width: 8,
			height: 9
			},
			{
			pattern: 'http://tti-ar2012.sedgwick-richardson.net/wp-content/uploads/2013/graph-pattern-1.gif',
			width: 8,
			height: 9
			}
		]*/
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			categories: [
				'2010',
				'2011',
				'2012'
			],
			tickWidth: 0,
			lineColor: "#2F5364",
		},
		yAxis: {
			min: 0,
			title: {text:null},
			labels: {enabled:false},
			gridLineWidth: 0
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return this.point.category +' USD'+ this.y +'m';
            }
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				pointWidth: 33
			}
		},
		series: [{
			name: 'Population',
			data: [
				{y:3383,color: '#B4C2C9'},
				{y:3667, color: '#B4C2C9'},
				{y:3852, color: '#37596A'}
			/*{y:3383,
					color: {
					pattern: 'http://tti-ar2012.sedgwick-richardson.net/wp-content/uploads/2013/graph-pattern-4.gif',
					width: 62,
					height: 121}
				},
				{y:3667,
					color: {
					pattern: 'http://tti-ar2012.sedgwick-richardson.net/wp-content/uploads/2013/graph-pattern-4.gif',
					width: 62,
					height: 121}
				},
				{y:3852,
					color: {
					pattern: 'http://tti-ar2012.sedgwick-richardson.net/wp-content/uploads/2013/graph-pattern-5.gif',
					width: 55,
					height: 139}
				}*/],
			 dataLabels: {
				enabled: true,
				color: '#2F5364',
				align: 'center',
				x: 0,
				y: 0,
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman, sans-serif'
				}
			}/*,
			color: {
				pattern: 'http://tti-ar2012.sedgwick-richardson.net/wp-content/uploads/2013/graph-pattern-1.gif',
				width: 8,
				height: 9
			}*/
		}]
	});
	
	$('#graph-container-2').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 0,
			spacingLeft: 0,
			spacingRight: 0,
			style: {
				fontFamily: '11px Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			categories: [
				'2010',
				'2011',
				'2012'
			],
			tickWidth: 0,
			lineColor: "#2F5364",
		},
		yAxis: {
			min: 0,
			title: {text:null},
			labels: {enabled:false},
			gridLineWidth: 0
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return this.point.category +' '+ this.y +'%';
            }
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				pointWidth: 33
			}
		},
		series: [{
			name: 'Population',
			data: [{y:32.2,	color: '#B4C2C9'},
				{y:32.6, color: '#B4C2C9'},
				{y:33.5, color: '#37596A'}],
			 dataLabels: {
				enabled: true,
				color: '#2F5364',
				align: 'center',
				x: 0,
				y: 0,
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman, sans-serif'
				}
			}
		}]
	});
	
	$('#graph-container-3').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 0,
			spacingLeft: 0,
			spacingRight: 0,
			style: {
				fontFamily: '11px Trade Gothic W01 Roman',
				color: "#2F5364"
			},
			dataLabels: {
                formatter: function () {
                    return Highcharts.numberFormat(this.value, 0, '.', ',');
				}
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			categories: [
				'2010',
				'2011',
				'2012'
			],
			tickWidth: 0,
			lineColor: "#2F5364",
		},
		yAxis: {
			min: 0,
			max: 260,
			title: {text:null},
			labels: {enabled:false},
			gridLineWidth: 0
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return this.point.category +' USD'+ this.y +'m';
            }
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				pointWidth: 33
			}
		},
		series: [{
			name: 'Population',
			data: [{y:168,	color: '#B4C2C9'},
				{y:219, color: '#B4C2C9'},
				{y:260, color: '#37596A'}],
			 dataLabels: {
				enabled: true,
				color: '#2F5364',
				align: 'center',
				x: 0,
				y: 0,
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman, sans-serif'
				}
			}
		}]
	});
	
	$('#graph-container-4').highcharts({
		chart: {
			type: 'column',
			spacingTop: 0,
			spacingBottom: 0,
			spacingLeft: 0,
			spacingRight: 0,
			alignTicks: false,
			style: {
				fontFamily: '11px Trade Gothic W01 Roman',
				color: "#2F5364"
			}
		},
		legend: {
			enabled: false
		},
		title: {
			text: null
		},
		subtitle: {
			text: null
		},
		xAxis: {
			categories: [
				'2010',
				'2011',
				'2012'
			],
			tickWidth: 0,
			lineColor: "#2F5364",
		},
		yAxis: {
			min: 0,
			max: 12,
			title: {text:null},
			labels: {enabled:false},
			gridLineWidth: 0
		},
		credits: {
			enabled: false
		},
		exporting: {
			enabled: false
		},
		tooltip: {
			formatter: function() {
                return this.point.category +' US'+ Highcharts.numberFormat(this.y, 2, '.', ',') +'cents';
            }
		},
		plotOptions: {
			column: {
				borderWidth: 0,
				pointWidth: 33
			}
		},
		series: [{
			name: 'Population',
			data: [{y:5.97,	color: '#B4C2C9'},
				{y:9.47, color: '#B4C2C9'},
				{y:11.42, color: '#37596A'}],
			 dataLabels: {
				enabled: true,
				color: '#2F5364',
				align: 'center',
				x: 0,
				y: 0,
				style: {
					fontSize: '11px',
					fontFamily: 'Trade Gothic W01 Roman, sans-serif'
				}
			}
		}]
	});
}