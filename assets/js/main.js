$(window).on('load', () => {
    // var pjax = new Pjax({
    //     selectors: [
    //         "title",
    //         "meta[name=description]",
    //         "#barba-wrapper"
    //     ],
    //     cacheBust: false
    // });
    console.log('Pjax Loaded!');
});

$(document).ready(function () {
    $(".menu-trigger").click(function () {
        $(this).toggleClass("active"), $(".b-top, .b-btm").toggleClass("active"), $("nav.gnav").toggleClass("close"),
            $(".gnav-wrap").fadeToggle(250, (function () {
                $("nav.gnav").toggleClass("active"), $(".gnav-block").toggleClass("active")
            }))
    })
});

// THREE.GlitchPass = function(dt_size) {
//     THREE.Pass.call(this), void 0 === THREE.DigitalGlitch && console.error('THREE.GlitchPass relies on THREE.DigitalGlitch')
//     var shader = THREE.DigitalGlitch
//     this.uniforms = THREE.UniformsUtils.clone(shader.uniforms), null == dt_size && (dt_size = 64), this.uniforms.tDisp.value = this.generateHeightmap(dt_size), this.material = new THREE.ShaderMaterial({
//       uniforms: this.uniforms,
//       vertexShader: shader.vertexShader,
//       fragmentShader: shader.fragmentShader
//     }), this.fsQuad = new THREE.Pass.FullScreenQuad(this.material), this.goWild = !1, this.curF = 0, this.generateTrigger()
//   }, THREE.GlitchPass.prototype = Object.assign(Object.create(THREE.Pass.prototype), {
//     constructor: THREE.GlitchPass, render: function(renderer, writeBuffer, readBuffer) {
//       this.uniforms.tDiffuse.value = readBuffer.texture, this.uniforms.seed.value = Math.random(), this.uniforms.byp.value = 0, this.curF % this.randX == 0 || 1 == this.goWild ? (this.uniforms.amount.value = Math.random() / 30, this.uniforms.angle.value = THREE.Math.randFloat(-Math.PI, Math.PI), this.uniforms.seed_x.value = THREE.Math.randFloat(-1, 1), this.uniforms.seed_y.value = THREE.Math.randFloat(-1, 1), this.uniforms.distortion_x.value = THREE.Math.randFloat(0, 1), this.uniforms.distortion_y.value = THREE.Math.randFloat(0, 1), this.curF = 0, this.generateTrigger()) : this.curF % this.randX < this.randX / 1 ? (this.uniforms.amount.value = Math.random() / 90, this.uniforms.angle.value = THREE.Math.randFloat(-Math.PI, Math.PI), this.uniforms.distortion_x.value = THREE.Math.randFloat(0, 1), this.uniforms.distortion_y.value = THREE.Math.randFloat(0, 1), this.uniforms.seed_x.value = THREE.Math.randFloat(-.3, .3), this.uniforms.seed_y.value = THREE.Math.randFloat(-.3, .3)) : 0 == this.goWild && (this.uniforms.byp.value = 1), this.curF++, this.renderToScreen ? (renderer.setRenderTarget(null), this.fsQuad.render(renderer)) : (renderer.setRenderTarget(writeBuffer), this.clear && renderer.clear(), this.fsQuad.render(renderer))
//     }, generateTrigger: function() {
//       this.randX = THREE.Math.randInt(50, 100)
//     }, generateHeightmap: function(dt_size) {
//       for (var data_arr = new Float32Array(dt_size * dt_size * 3), length = dt_size * dt_size, i = 0; i < length; i++) {
//         var val = THREE.Math.randFloat(0, 1)
//         data_arr[3 * i + 0] = val, data_arr[3 * i + 1] = val, data_arr[3 * i + 2] = val
//       }
//       return new THREE.DataTexture(data_arr, dt_size, dt_size, THREE.RGBFormat, THREE.FloatType)
//     }
//   })
  
  