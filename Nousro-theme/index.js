import './materialize/js/cash';
import './materialize/js/global';
// import './materialize/js/initial';
import './materialize/js/anime.min.js';
// import './materialize/js/animation';
import './materialize/js/cards';
import './materialize/js/buttons';
import './materialize/js/waves';
import './materialize/js/parallax';
import './materialize/js/collapsible';
import './materialize/js/forms';
import './materialize/js/scrollspy';
import './materialize/js/modal';
import './materialize/js/materialbox';
import './materialize/js/sidenav';
import './materialize/js/dropdown';
import './materialize/js/carousel';
import './materialize/js/tabs';
import AOS from 'aos';

console.log(1234);

import lottie from 'lottie-web';
import { send } from 'q';

console.log('Привет, Мир!');
document.addEventListener('DOMContentLoaded', function() {
    AOS.init();
    var parallax = document.querySelectorAll('.parallax');
    var parallaxInstances = M.Parallax.init(parallax);

    var collapsible = document.querySelectorAll('.collapsible');
    var collapsibleInstances = M.Collapsible.init(collapsible);

    var scrolls = document.querySelectorAll('.scrollspy');
    var scrollsInstances = M.ScrollSpy.init(scrolls);

    var modals = document.querySelectorAll('.modal');
    var modalsInstances = M.Modal.init(modals);

    var boxes = document.querySelectorAll('.materialboxed');
    var boxesInstances = M.Materialbox.init(boxes);

    var sidenav = document.querySelectorAll('.sidenav');
    var sidenavInstances = M.Sidenav.init(sidenav);

    var tabs = document.querySelectorAll('.tabs');
    var tabsInstances = M.Tabs.init(tabs);

    var dropdowns = document.querySelectorAll('.dropdown-trigger');
    var dropdownsInstances = M.Dropdown.init(dropdowns, { hover: true, coverTrigger: false, constrainWidth: false });

    var carousels = document.querySelectorAll('.carousel');
    var carouselsInstances = M.Carousel.init(carousels, {
        fullWidth: true,
        numVisible: 4,
        padding: 35,
        indicators: true
        // onCycleTo: function(){
        //     setTimeout(()=>{
        //         carouselsInstances[0].next();
        //     }, 4000);
        // }
        });
    autoplay();
    function autoplay() {
        jQuery('.carousel').carousel('next');
        setTimeout(autoplay, 4500);
    }
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!',
            name: '',
            nameError:{
                text: ''
            },
            errors: []
        },
        methods:{
            nameValidate(){
                if(this.name === ''){
                    this.nameError.text = 'Имя обязательно в заполнению.'
                }
            },
            checkForm:function(e) {
                e.preventDefault();
                this.errors = [];
                if(this.name === '') this.errors.push("Имя обязательно в заполнению!");
                if(!this.errors.length) return true;
            }
        },
        mounted(){
            var otherCourses = document.querySelectorAll('.collapsibleC');
            var otherCoursesInstances = M.Collapsible.init(otherCourses);
        }
    });

    

    const container = document.getElementById('feather-menu');
    const DATA = {"v":"5.5.2","fr":30,"ip":0,"op":60,"w":24,"h":24,"nm":"menu V2","ddd":0,"assets":[],"layers":[{"ddd":0,"ind":1,"ty":4,"nm":"menu V2","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[12,12,0],"ix":2},"a":{"a":0,"k":[12,12,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,0],[0,0]],"o":[[0,0],[0,0]],"v":[[6,-6],[-6,6]],"c":false},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"st","c":{"a":0,"k":[0,0,0,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":2,"ix":5},"lc":2,"lj":2,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":1,"k":[{"i":{"x":0.833,"y":1},"o":{"x":0.757,"y":0},"t":0,"s":[12,6],"to":[0,1],"ti":[0,-1]},{"t":10,"s":[12,12]}],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":1,"k":[{"i":{"x":[0.202],"y":[1.082]},"o":{"x":[0.333],"y":[0]},"t":10,"s":[45]},{"i":{"x":[0.67],"y":[3129600.967]},"o":{"x":[0.167],"y":[0]},"t":45,"s":[360]},{"t":59,"s":[360]}],"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"line/horizontal/top","np":2,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false},{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,0],[0,0]],"o":[[0,0],[0,0]],"v":[[6,-6],[-6,6]],"c":false},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"st","c":{"a":0,"k":[0,0,0,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":2,"ix":5},"lc":2,"lj":2,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":1,"k":[{"i":{"x":0.833,"y":0.833},"o":{"x":0.167,"y":0.167},"t":0,"s":[12,12],"to":[0,0],"ti":[0,0]},{"t":10,"s":[12,12]}],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":1,"k":[{"i":{"x":[0.202],"y":[1.114]},"o":{"x":[0.333],"y":[0]},"t":10,"s":[45]},{"i":{"x":[0.665],"y":[1933716.068]},"o":{"x":[0.167],"y":[0]},"t":45,"s":[270]},{"t":59,"s":[270]}],"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"line/horizontal/center","np":2,"cix":2,"bm":0,"ix":2,"mn":"ADBE Vector Group","hd":false},{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,0],[0,0]],"o":[[0,0],[0,0]],"v":[[6,-6],[-6,6]],"c":false},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"st","c":{"a":0,"k":[0,0,0,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":2,"ix":5},"lc":2,"lj":2,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":1,"k":[{"i":{"x":0.833,"y":1},"o":{"x":0.757,"y":0},"t":0,"s":[12,18],"to":[0,-1],"ti":[0,1]},{"t":10,"s":[12,12]}],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":45,"ix":6},"o":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.167],"y":[0]},"t":0,"s":[100]},{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":9,"s":[100]},{"t":10,"s":[0]}],"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"line/horizontal/bottom","np":2,"cix":2,"bm":0,"ix":3,"mn":"ADBE Vector Group","hd":false}],"ip":0,"op":60,"st":0,"bm":0}],"markers":[]};
    var menuPosition = true;
    // Lottie Animations
    var menuAnim = lottie.loadAnimation({
        container: container, // the dom element that will contain the animation
        renderer: 'svg',
        loop: false,
        autoplay: false,
        animationData: DATA // the path to the animation json
    });

    // container.addEventListener('click', function(){
    //     if(menuPosition){
    //         menuAnim.setDirection(1);
    //         menuAnim.play();
    //         menuPosition = false;
    //     }else{
    //         menuAnim.setDirection(-1);
    //         console.log({sidenavInstances});
    //         // sidenavInstances[0].close();
    //         menuAnim.play();
    //         menuPosition = true;
    //     }
    // });

    // Mail Us Animation
    const mail = document.getElementById('mail-us');
    const mainData = {"v":"5.5.2","fr":30,"ip":0,"op":20,"w":32,"h":32,"nm":"mail","ddd":0,"assets":[],"layers":[{"ddd":0,"ind":1,"ty":4,"nm":"mail","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":1,"k":[{"i":{"x":0.3,"y":1},"o":{"x":0.3,"y":0},"t":0,"s":[16,16,0],"to":[0,0.417,0],"ti":[0,-0.417,0]},{"t":15,"s":[16,18.5,0]}],"ix":2},"a":{"a":0,"k":[16,16,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[-1.1,0],[0,0],[0,-1.1],[0,0]],"o":[[0,0],[0,-1.1],[0,0],[1.101,0],[0,0],[0,0]],"v":[[-7.046,3.799],[-7.046,-1.818],[-5.046,-3.818],[5.046,-3.818],[7.046,-1.818],[7.046,3.818]],"c":false},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"tm","s":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":11,"s":[50]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":13,"s":[36.444]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":14,"s":[30.667]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":15,"s":[26.889]},{"t":20,"s":[25]}],"ix":1},"e":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":11,"s":[50]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":13,"s":[63.056]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":14,"s":[69.583]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":15,"s":[72.111]},{"t":20,"s":[75]}],"ix":2},"o":{"a":0,"k":0,"ix":3},"m":1,"ix":2,"nm":"Trim Paths 1","mn":"ADBE Vector Filter - Trim","hd":false},{"ty":"st","c":{"a":0,"k":[255,255,255,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":2,"ix":5},"lc":2,"lj":2,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":0,"k":[16,13.201],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"letter","np":3,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false},{"ty":"tr","p":{"a":1,"k":[{"i":{"x":0.3,"y":1},"o":{"x":0.3,"y":0},"t":10,"s":[16,20.826],"to":[0,-1.104],"ti":[0,1.104]},{"t":20,"s":[16,14.201]}],"ix":2},"a":{"a":0,"k":[16,13.201],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"letter","np":1,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false},{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":1,"k":[{"i":{"x":0.3,"y":1},"o":{"x":0.3,"y":0},"t":0,"s":[{"i":[[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0]],"v":[[10,-3.5],[0,3.5],[-10,-3.5]],"c":false}]},{"t":15,"s":[{"i":[[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0]],"v":[[9.188,-5.125],[0,-12.25],[-9.188,-5.125]],"c":false}]}],"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"st","c":{"a":0,"k":[255,255,255,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":2,"ix":5},"lc":2,"lj":2,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":0,"k":[16,13.5],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"envelop open","np":2,"cix":2,"bm":0,"ix":2,"mn":"ADBE Vector Group","hd":false},{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0]],"v":[[10,-3.5],[0,3.5],[-10,-3.5]],"c":false},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"st","c":{"a":0,"k":[255,255,255,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":2,"ix":5},"lc":2,"lj":2,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":0,"k":[16,13.5],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":0,"s":[0]},{"t":2,"s":[100]}],"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"envelop inside","np":2,"cix":2,"bm":0,"ix":3,"mn":"ADBE Vector Group","hd":false},{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,-1.1],[0,0],[1.1,0],[0,0],[0,1.1],[0,0],[-1.1,0]],"o":[[0,0],[1.1,0],[0,0],[0,1.1],[0,0],[-1.1,0],[0,0],[0,-1.1],[0,0]],"v":[[0,-8],[8,-8],[10,-6],[10,6],[8,8],[-8,8],[-10,6],[-10,-6],[-8,-8]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"tm","s":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":5,"s":[0]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":6,"s":[4]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":7,"s":[10]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":8,"s":[12]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":10,"s":[13]},{"t":13,"s":[14]}],"ix":1},"e":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":5,"s":[100]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":6,"s":[96]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":7,"s":[90]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":8,"s":[88]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":10,"s":[87]},{"t":13,"s":[86]}],"ix":2},"o":{"a":0,"k":0,"ix":3},"m":1,"ix":2,"nm":"Trim Paths 1","mn":"ADBE Vector Filter - Trim","hd":false},{"ty":"st","c":{"a":0,"k":[255,255,255,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":2,"ix":5},"lc":2,"lj":2,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":0,"k":[16,16],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"envelop","np":3,"cix":2,"bm":0,"ix":4,"mn":"ADBE Vector Group","hd":false}],"ip":0,"op":20,"st":0,"bm":0}],"markers":[]};
    var mailAnim = lottie.loadAnimation({
        container: mail, // the dom element that will contain the animation
        renderer: 'svg',
        loop: true,
        autoplay: true,
        animationData: mainData // the path to the animation json
    });
    mailAnim.setSpeed(0.4);

    // Mail Us Animation [Hover]
    const mailHovers = document.querySelectorAll('.request');
    // const mainData = {"v":"5.5.2","fr":30,"ip":0,"op":20,"w":32,"h":32,"nm":"mail","ddd":0,"assets":[],"layers":[{"ddd":0,"ind":1,"ty":4,"nm":"mail","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":1,"k":[{"i":{"x":0.3,"y":1},"o":{"x":0.3,"y":0},"t":0,"s":[16,16,0],"to":[0,0.417,0],"ti":[0,-0.417,0]},{"t":15,"s":[16,18.5,0]}],"ix":2},"a":{"a":0,"k":[16,16,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[-1.1,0],[0,0],[0,-1.1],[0,0]],"o":[[0,0],[0,-1.1],[0,0],[1.101,0],[0,0],[0,0]],"v":[[-7.046,3.799],[-7.046,-1.818],[-5.046,-3.818],[5.046,-3.818],[7.046,-1.818],[7.046,3.818]],"c":false},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"tm","s":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":11,"s":[50]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":13,"s":[36.444]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":14,"s":[30.667]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":15,"s":[26.889]},{"t":20,"s":[25]}],"ix":1},"e":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":11,"s":[50]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":13,"s":[63.056]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":14,"s":[69.583]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":15,"s":[72.111]},{"t":20,"s":[75]}],"ix":2},"o":{"a":0,"k":0,"ix":3},"m":1,"ix":2,"nm":"Trim Paths 1","mn":"ADBE Vector Filter - Trim","hd":false},{"ty":"st","c":{"a":0,"k":[255,255,255,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":2,"ix":5},"lc":2,"lj":2,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":0,"k":[16,13.201],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"letter","np":3,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false},{"ty":"tr","p":{"a":1,"k":[{"i":{"x":0.3,"y":1},"o":{"x":0.3,"y":0},"t":10,"s":[16,20.826],"to":[0,-1.104],"ti":[0,1.104]},{"t":20,"s":[16,14.201]}],"ix":2},"a":{"a":0,"k":[16,13.201],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"letter","np":1,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false},{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":1,"k":[{"i":{"x":0.3,"y":1},"o":{"x":0.3,"y":0},"t":0,"s":[{"i":[[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0]],"v":[[10,-3.5],[0,3.5],[-10,-3.5]],"c":false}]},{"t":15,"s":[{"i":[[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0]],"v":[[9.188,-5.125],[0,-12.25],[-9.188,-5.125]],"c":false}]}],"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"st","c":{"a":0,"k":[255,255,255,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":2,"ix":5},"lc":2,"lj":2,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":0,"k":[16,13.5],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"envelop open","np":2,"cix":2,"bm":0,"ix":2,"mn":"ADBE Vector Group","hd":false},{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0]],"v":[[10,-3.5],[0,3.5],[-10,-3.5]],"c":false},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"st","c":{"a":0,"k":[255,255,255,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":2,"ix":5},"lc":2,"lj":2,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":0,"k":[16,13.5],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":0,"s":[0]},{"t":2,"s":[100]}],"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"envelop inside","np":2,"cix":2,"bm":0,"ix":3,"mn":"ADBE Vector Group","hd":false},{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,-1.1],[0,0],[1.1,0],[0,0],[0,1.1],[0,0],[-1.1,0]],"o":[[0,0],[1.1,0],[0,0],[0,1.1],[0,0],[-1.1,0],[0,0],[0,-1.1],[0,0]],"v":[[0,-8],[8,-8],[10,-6],[10,6],[8,8],[-8,8],[-10,6],[-10,-6],[-8,-8]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"tm","s":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":5,"s":[0]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":6,"s":[4]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":7,"s":[10]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":8,"s":[12]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":10,"s":[13]},{"t":13,"s":[14]}],"ix":1},"e":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":5,"s":[100]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":6,"s":[96]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":7,"s":[90]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":8,"s":[88]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":10,"s":[87]},{"t":13,"s":[86]}],"ix":2},"o":{"a":0,"k":0,"ix":3},"m":1,"ix":2,"nm":"Trim Paths 1","mn":"ADBE Vector Filter - Trim","hd":false},{"ty":"st","c":{"a":0,"k":[255,255,255,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":2,"ix":5},"lc":2,"lj":2,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":0,"k":[16,16],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"envelop","np":3,"cix":2,"bm":0,"ix":4,"mn":"ADBE Vector Group","hd":false}],"ip":0,"op":20,"st":0,"bm":0}],"markers":[]};

    if(mailHovers != null){
        mailHovers.forEach(function(element) {
            let _elem = element.parentNode;
            console.log(element);
            let mailHoverAnim = lottie.loadAnimation({
                container: element, // the dom element that will contain the animation
                renderer: 'svg',
                loop: false,
                autoplay: false,
                animationData: mainData // the path to the animation json
            });
            console.log(element);
            element.addEventListener('mouseenter', function(){
                console.log('h');
                mailHoverAnim.play();
            });
            element.addEventListener('mouseleave', function(){
                mailHoverAnim.stop();
            });
        });
    }
    

    // Bookmarks
    const bookmarksData = {"v":"5.5.2","fr":30,"ip":0,"op":10,"w":24,"h":24,"nm":"bookmark","ddd":0,"assets":[],"layers":[{"ddd":0,"ind":1,"ty":4,"nm":"bookmark","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[12,12,0],"ix":2},"a":{"a":0,"k":[12,12,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,0],[0,0],[-1.104,0],[0,0],[0,-1.104]],"o":[[0,0],[0,0],[0,0],[0,-1.104],[0,0],[1.104,0],[0,0]],"v":[[7,9],[0,4],[-7,9],[-7,-7],[-5,-9],[5,-9],[7,-7]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"st","c":{"a":0,"k":[255,255,255,1],"ix":3},"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":2,"ix":5},"lc":2,"lj":2,"bm":0,"nm":"Stroke 1","mn":"ADBE Vector Graphic - Stroke","hd":false},{"ty":"tr","p":{"a":0,"k":[12,12],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":1,"k":[{"i":{"x":[0.667,0.667],"y":[1,1]},"o":{"x":[0.333,0.333],"y":[0,0]},"t":0,"s":[100,100]},{"i":{"x":[0.667,0.667],"y":[1,1]},"o":{"x":[0.333,0.333],"y":[0,0]},"t":5,"s":[90,90]},{"t":10,"s":[100,100]}],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"bookmark","np":2,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false}],"ip":0,"op":10,"st":0,"bm":0},{"ddd":0,"ind":2,"ty":4,"nm":"bookmark fill","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":0,"k":[12,12,0],"ix":2},"a":{"a":0,"k":[12,12,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,0],[0,0],[-1.104,0],[0,0],[0,-1.104]],"o":[[0,0],[0,0],[0,0],[0,-1.104],[0,0],[1.104,0],[0,0]],"v":[[7,9],[0,4],[-7,9],[-7,-7],[-5,-9],[5,-9],[7,-7]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"fl","c":{"a":0,"k":[255,255,255,1],"ix":4},"o":{"a":0,"k":100,"ix":5},"r":1,"bm":0,"nm":"Fill 1","mn":"ADBE Vector Graphic - Fill","hd":false},{"ty":"tr","p":{"a":0,"k":[12,12],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":1,"k":[{"i":{"x":[0.667,0.667],"y":[1,1]},"o":{"x":[0.333,0.333],"y":[0,0]},"t":2,"s":[50,50]},{"t":10,"s":[100,100]}],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":1,"k":[{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":2,"s":[0]},{"t":7,"s":[100]}],"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"bookmark","np":2,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false}],"ip":0,"op":10,"st":0,"bm":0}],"markers":[]};
    const bookmarks = document.querySelectorAll('.bookmarks');

    if(bookmarks != null){
        bookmarks.forEach(function(element) {
        
            let bookmarksAnim = lottie.loadAnimation({
                container: element, // the dom element that will contain the animation
                renderer: 'svg',
                loop: false,
                autoplay: false,
                animationData: bookmarksData // the path to the animation json
            });
            element.addEventListener('mouseenter', function(){
                bookmarksAnim.play();
            });
            element.addEventListener('mouseleave', function(){
                bookmarksAnim.stop();
            });
        });
    }

});