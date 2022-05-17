let parisMap ;
let canvas ;

let metro ;
let rer ;

let trafficG ;
let trafficP ;

const mappa = new Mappa('Leaflet') ;
const options = {
    lat : 48.864716 ,
    lng : 2.349014 ,
    zoom : 13.3 ,
    style : "https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png"
}


function setup(){
    canvas = createCanvas(windowWidth, windowHeight) ;

    parisMap = mappa.tileMap (options) ;
    parisMap.overlay(canvas) ;

    //parisMap.onChange(draw);

    //CheckBox
    trafficG =createCheckbox("Grand traffic",true);
    trafficP =createCheckbox("Petit traffic", true);

    //redessine
    trafficG.changed(draw);
    trafficP.changed(draw);
}

function draw(){
    clear()

    // 10 petits trafic
    
    // trafic 169 939 
    fill(255, 127, 127,210);
    stroke(255, 127, 127);
    const egliseDauteuil = parisMap.latLngToPixel(48.847169, 2.26902);
    ellipse(egliseDauteuil.x, egliseDauteuil.y, 16.9, 16.9);

    // trafic 329 597
    const pelleport = parisMap.latLngToPixel(48.868434, 2.401509);
    ellipse(pelleport.x, pelleport.y, 32.9, 32.9);

    // trafic 386 948
    const PreSaintGervais = parisMap.latLngToPixel(48.88025, 2.39891);
    ellipse(PreSaintGervais.x, PreSaintGervais.y, 38.6, 38.6) 
  
    // trafic 545 750
    const buttesChaumont = parisMap.latLngToPixel(48.8785, 2.381772);
    ellipse(buttesChaumont.x, buttesChaumont.y, 54.5, 54.5) 

    // trafic 546 780
    const bolivar = parisMap.latLngToPixel(48.880502, 2.374922);
    ellipse(bolivar.x, bolivar.y, 54.6, 54.6) 

    // trafic 547 896
    const danude = parisMap.latLngToPixel(48.881854, 2.394019);
    ellipse(danude.x, danude.y, 54.7, 54.7)   

    // trafic 622 094
    const porteDauteuil = parisMap.latLngToPixel(48.8479, 2.259594);
    ellipse(porteDauteuil.x, porteDauteuil.y, 62.2, 62.2)   

    // trafic 692 665
    const chardonLagache = parisMap.latLngToPixel(48.845145, 2.266016);
    ellipse(chardonLagache.x, chardonLagache.y, 69.2, 69.2)

    // trafic 716 699
    const saintFargeau = parisMap.latLngToPixel(48.871961, 2.404509);
    ellipse(saintFargeau.x, saintFargeau.y, 71.6, 71.6)

    // trafic 881 763
    const falguiere = parisMap.latLngToPixel(48.844555, 2.318269);
    ellipse(falguiere.x, falguiere.y, 88.1, 88.1) 
    
    //10 grands trafic

    // trafic 51 141 374
    fill(50, 30, 70,110);
    stroke(50, 30, 70);
    const gareDuNord = parisMap.latLngToPixel(48.881716, 2.356351);
    ellipse(gareDuNord.x, gareDuNord.y, 511, 511);

    // trafic 46 923 920
    const stLazare = parisMap.latLngToPixel(48.875115, 2.329183);
    ellipse(stLazare.x, stLazare.y, 469, 469);

    // trafic 36 512 570
    const gareDeLyon = parisMap.latLngToPixel(48.844598, 2.373806);
    ellipse(gareDeLyon.x, gareDeLyon.y, 469, 469);

    // trafic 29 857 740
    const montparnasse = parisMap.latLngToPixel(48.841139, 2.320497);
    ellipse(montparnasse.x, montparnasse.y, 298, 298);

    // trafic 22 443 106
    const gareDeLest = parisMap.latLngToPixel(48.877282, 2.359504);
    ellipse(gareDeLest.x, gareDeLest.y, 224, 224);

    // trafic 19 754 334
    const bibliotheque = parisMap.latLngToPixel(48.82999, 2.376433);
    ellipse(bibliotheque.x, bibliotheque.y, 197, 197);

    // trafic 16 596 521
    const republique = parisMap.latLngToPixel(48.867551, 2.363979);
    ellipse(republique.x, republique.y, 165, 165);    

    // trafic 16 213 921
    const laDefense = parisMap.latLngToPixel(48.891534, 2.23878);
    ellipse(laDefense.x, laDefense.y, 162, 162);  

    // trafic 16 069 170
    const lesHalles = parisMap.latLngToPixel(48.861651, 2.347013);
    ellipse(lesHalles.x, lesHalles.y, 160, 160); 

    // trafic 13 151 192
    const bastille = parisMap.latLngToPixel(48.853252, 2.368331);
    ellipse(bastille.x, bastille.y, 131, 131); 

}
