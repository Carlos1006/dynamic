;

function Renderer() {
    this.scene = null;
    this.light = null;
    this.init();
}
var R = Renderer.prototype;
R.init = function() {
    clock = new THREE.Clock();
    clock.start();
    this.createScene();
    this.createDefaultLight();
    this.createCamera();
    this.createRenderer();
    this.createObject();
    window.addEventListener('resize', onWindowResize, false);
    var self = this;

    function onWindowResize() {}
};
R.createObject = function() {
    var self = this
    var geometry = new THREE.SphereGeometry(5, 32, 32);
    var material = new THREE.MeshLambertMaterial({
        color: 0xFF00FF,
        wireframe: true
    });
    this.sphere = new THREE.Mesh(geometry, material);
    this.sphere.position.set(3, 3, 0);
    this.addToScene(this.sphere);
};
R.addToScene = function() {
    for (var i = 0; i < arguments.length; i++) {
        this.scene.add(arguments[i]);
    }
};
R.createCamera = function() {
    renderCont = $("#renderContainer");
    this.camera = new THREE.PerspectiveCamera();
    this.camera.position.set(10, 0, 25);
    this.camera.lookAt(new THREE.Vector3(0, 0, 0));
    this.addToScene(this.camera);
}
R.createScene = function() {
    this.scene = new THREE.Scene();
    document.scene = this.scene;
};
R.createRenderer = function() {
    renderCont = $("#renderContainer");
    this.renderer = new THREE.WebGLRenderer({
        alpha: true,
        antialias: true
    });
    this.renderer.setSize(renderCont.innerWidth(), renderCont.innerHeight());
    this.renderer.setClearColor(0x000000, 0);
    this.renderer.setPixelRatio(window.devicePixelRatio);
    this.w = renderCont.innerWidth();
    this.h = renderCont.innerHeight();
    this.renderer.autoClear = false;
    renderCont.append(this.renderer.domElement);
    document.renderer = this.renderer;
};
R.createDefaultLight = function() {
    var hemisphereLight = new Light({
        type: "hemi",
        sky: 0xddeeff,
        ground: 0x0f0e0d,
        intensity: 1,
        position: [0, 1, 0]
    });
    this.addToScene(hemisphereLight.object.light);
};
R.updateCamera = function() {
    this.renderer.setViewport(0, 0, this.w, this.w);
    this.renderer.clear();
    this.renderer.render(this.scene, this.camera);
};
R.animation = function() {
    requestAnimationFrame(this.animation.bind(this));
    deltaTime = clock.getDelta();
    this.updateCamera();
    this.sphere.rotation.y += 1 * deltaTime;
};

function Light(arg) {
    var type = arg.type;
    var lightInstance = null;
    if (type == "hemi") {
        lightInstance = new HemiLight(arg);
    } else if (type == "point") {
        lightInstance = new PointLight(arg);
    }
    this.object = lightInstance;
};
var L = Light.prototype; //POINTfunction PointLight(arg) {    this.arguments = arg;    this.setGeometry();    this.setLight();    this.setMaterial();    this.light.add( new THREE.Mesh(this.geometry, this.material) );    this.light.position.x = this.arguments.position[0];    this.light.position.y = this.arguments.position[1];    this.light.position.z = this.arguments.position[2];    this.light.castShadow = true;    this.name = "point";};var PL = PointLight.prototype;PL.setGeometry = function() {    this.geometry = new THREE.SphereGeometry(this.arguments.radius,        this.arguments.widthSegments,        this.arguments.heightSegments);};PL.setLight = function() {    this.light = new THREE.PointLight(this.arguments.color,        this.arguments.intensity,        this.arguments.distance,        this.arguments.decay);};PL.setMaterial = function() {    this.material = new THREE.MeshStandardMaterial(this.arguments.material);};PL.update = function(params) {    this.light.castShadow = params;    this.material.emissiveIntensity = this.light.intensity / Math.pow( 0.02, 2.0 );};//HEMIfunction HemiLight(arg) {    this.arguments = arg;    this.setLight();};var HL = HemiLight.prototype;HL.setLight = function() {    this.light = new THREE.HemisphereLight(this.arguments.sky, this.arguments.ground, this.arguments.intensity);    this.light.position.set(this.arguments.position[0], this.arguments.position[1], this.arguments.position[2]);    this.light.name = "hemi";};