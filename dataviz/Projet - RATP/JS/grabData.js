//https://data.ratp.fr/api/records/1.0/search/?dataset=trafic-annuel-entrant-par-station-du-reseau-ferre-2021&q=&facet=reseau&facet=station&facet=ville&facet=arrondissement_pour_paris
let dataRATP            = "https://data.ratp.fr/api/records/";
let version             = "1.0/";
let question            = "search/?dataset=";
let datasetID           = "trafic-annuel-entrant-par-station-du-reseau-ferre-2021&q=";
let rows                = "&rows="+200;
let sort                = "&sort=trafic";
let sort2               = "&sort=-trafic";
let facetrequest        = "&facet=";
let facets              = facetrequest + "reseau"+facetrequest+"station"+facetrequest+"ville"+facetrequest+"arrondissement_pour_paris";

let request             = dataRATP + version + question + datasetID + rows + sort + facets;
let request2            = dataRATP + version + question + datasetID + rows + sort2 + facets;

//console.log(request);

// des tableaux vide
let topTenLabels        = []; 
let topTenCount         = [];

let topTenLabels2        = []; 
let topTenCount2         = [];

let topTenLabels3       = [];
let topTenCount3         = [];

let topTenLabels4      = [];
let topTenCount4         = [];

loadData(request)
    .then(function(response){
        console.log(response);

            let records = response.records;

            for(let i=0; i<20; i++){
                let station         = records[i].fields.station;
                let reseau          = records[i].fields.reseau;


                let label           = reseau+" "+station;
                let countTrafic     = records[i].fields.trafic;

                topTenLabels.push(label);
                topTenCount.push(countTrafic);

            }

            BarGraph(
                        "TopTenTitleChart",
                        topTenLabels,
                        "Top 20 sur les + entrants directs des voyageurs en validant un titre de transport valide",
                        topTenCount
                    );


            //BarGraph2(
            //            "TopTenTitleChart2",
            //            topTenLabels,
            //            "Top 3 sur les + entrants directs des voyageurs en validant un titre de transport valide",
            //            topTenCount
            //        );

    })

    loadData2(request2)
    .then(function(response){
        console.log(response);

            let records = response.records;

            for(let i=0; i<20; i++){
                let station         = records[i].fields.station;
                let reseau          = records[i].fields.reseau;


                let label           = reseau+" "+station;
                let countTrafic     = records[i].fields.trafic;

                topTenLabels2.push(label);
                topTenCount2.push(countTrafic);

            }


            BarGraph2(
                        "TopTenTitleChart2",
                        topTenLabels2,
                        "Top 20 sur les - entrants directs des voyageurs en validant un titre de transport valide",
                        topTenCount2
                    );

    })

    loadData3(request)
    .then(function(response){
        console.log(response);

            let records = response.records;
        console.log(records)
             for(let i=0; i<3; i++){
                 let station         = records[i].fields.station;
                 let reseau          = records[i].fields.reseau;


                 let label           = reseau+" "+station;
                 let countTrafic     = records[i].fields.trafic;

                 topTenLabels3.push(label);
                 topTenCount3.push(countTrafic);

             }

             BarGraph3(
                         "TopTenTitleChart3",
                         topTenLabels3,
                         "Top 3 sur les + entrants directs des voyageurs en validant un titre de transport valide",
                         topTenCount3
                    );


    });

    loadData4(request2)
    .then(function(response){
        console.log(response);

            let records = response.records;
        console.log(records)
             for(let i=0; i<3; i++){
                 let station         = records[i].fields.station;
                 let reseau          = records[i].fields.reseau;


                 let label           = reseau+" "+station;
                 let countTrafic     = records[i].fields.trafic;

                 topTenLabels4.push(label);
                 topTenCount4.push(countTrafic);

             }

             BarGraph4(
                         "TopTenTitleChart4",
                         topTenLabels4,
                         "Top 3 sur les + entrants directs des voyageurs en validant un titre de transport valide",
                         topTenCount4
                    );
                    

    })

    .catch(function(error){
        console.error(error);
    })
