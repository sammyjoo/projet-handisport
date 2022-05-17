
function BarGraph(canvasID, labels, title, values){

    const ctx = document.getElementById(canvasID).getContext('2d');
    const chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
    
        // The data for our dataset
        data: {
            labels: labels,
            datasets: [{
                label: title,
                borderColor: 'rgb(50, 30, 70, 5)',
                backgroundColor: 'rgb(50, 30, 70,0.6)',
                data:values
            }]
        },


        // Configuration options go here
        options: {}
    });

    }
    
    

function BarGraph2(canvasID, labels, title, values){

    const ctx = document.getElementById(canvasID).getContext('2d');
    const chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
    
        // The data for our dataset
        data: {
            labels: labels,
            datasets: [{
                label: title,
                borderColor: 'rgb(255, 127, 127, 5)',
                backgroundColor: 'rgb(255, 127, 127,0.6)',
                data:values
            }]
        },


        // Configuration options go here
        options: {}
    });

    }
    
    function BarGraph3(canvasID, labels, title, values){

        const ctx = document.getElementById(canvasID).getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: labels,
                datasets: [{
                    label: title,
                    borderColor: 'rgb(50, 30, 70, 5)',
                    backgroundColor: ['rgb(50, 30, 70,0.6)','rgb(127, 30, 50,0.6)'],
                    data:values
                }]
            },
            options: options
        });
    
        }

        function BarGraph4(canvasID, labels, title, values){

            const ctx = document.getElementById(canvasID).getContext('2d');
            var zonePolaire = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        label: title,
                        borderColor: 'rgb(50, 30, 70, 5)',
                        backgroundColor: ['rgb(255, 127, 127,0.6)','rgb(120, 60, 50,0.6)'],
                        data:values
                    }]
                },
                options: options
            });
        
            }
