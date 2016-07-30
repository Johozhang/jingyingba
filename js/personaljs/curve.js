var myChart = echarts.init(document.getElementById('main'));
option = {
    title: {
        text: '学习曲线：（你当前所在班级为A班）',
        subtext: '分数'
    },
    tooltip: {
        trigger: 'axis'
    },
    legend: {
        data:['分数','线性分数'],
        x:"right"
    },
    xAxis:  {
        type: 'category',
        boundaryGap: false,
        data: ['1','2','3','4','5','6','7',24]
    },
    yAxis: {
        type: 'value',
    },dataZoom: [{
        type: 'inside',
        start: 0,
        end: 19
    }, {
        start: 0,
        end: 19,
        handleIcon: 'M8.2,13.6V3.9H6.3v9.7H3.1v14.9h3.3v9.7h1.8v-9.7h3.3V13.6H8.2z M9.7,24.4H4.8v-1.4h4.9V24.4z M9.7,19.1H4.8v-1.4h4.9V19.1z',
        handleSize: '80%',
        backgroundColor:"transparent",
        handleStyle: {
            color: 'green',
        }
    }],
    series: [
        {
            name:'线性分数',
            type:'line',
            data:["-",80, 70, 60, 50, 40, 30, 20],
        },
        {
            name:'分数',
            type:'line',
            data:['-',52, 34, 49,70, 77, 30, 0],
        }
    ]
};
myChart.setOption(option);