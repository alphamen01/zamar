<template>
    <div class="air__layout__content">
      <div class="air__utils__content">
        <!-- Breadcrumb -->
        <div class="row">
          <div class="col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><router-link to="/" > Panel de Control </router-link> </a></li>
                <li class="breadcrumb-item"><a href="#"><router-link to="/institucion"> Relación Instituto </router-link> </a></li>
                <li class="breadcrumb-item active" aria-current="page">Crear Institución</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="air__utils__heading">
        <h3>
            <span class="mr-3">Crear institución</span>
        </h3>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-5" >
                    <h4 class="mb-4">
                        <strong>Datos de la institución</strong>
                    </h4>
                    <form @submit.prevent="Save">
                        <div class="form-row">
                            <div class="form-group col-md-4" id="d-nombre_ies">
                                    <label for="nombre_ies">Nombre IES <div class="obligatorio">*</div></label>
                                    <input type="text" tabindex="1" class="form-control focusNext" v-model='formulario.nombre_ies' id="nombre_ies" name ='nombre_ies' placeholder="Nombre IES" />
                                    <div id="nombre_ies-error" data-error-list> </div>
                            </div>

                            <div class="form-group col-md-2" id="d-abreviatura">
                                <label for="abreviatura">Abreviatura <div class="obligatorio">*</div></label>
                                <input type="text" tabindex="2" class="form-control focusNext" id="abreviatura" name='abreviatura' v-model='formulario.abreviatura' placeholder="Abreviatura" />
                                <div id="abreviatura-error" data-error-list> </div>
                            </div>

                            <div class="form-group col-md-3" id="d-tipo_gestion">
                                <label for="tipo_gestion">Tipo gestión</label>
                                <input type="text" tabindex="3" class="form-control focusNext" id="tipo_gestion" name="tipo_gestion" v-model='formulario.tipo_gestion'  placeholder="Tipo gestión" />
                                <div id="tipo_gestion-error" data-error-list> </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3" id="d-id_departamento">
                                <label for="id_departamento">Departamento <div class="obligatorio">*</div></label>
                                <select id='id_departamento' tabindex="4" class='form-control focusNext' v-model='formulario.id_departamento'  @change='getProvincia()'>
                                  <option value='' selected disabled >Seleccione</option>
                                  <option v-for='data in departamentos' :value='data.id_departamento'>{{ data.nombre }}</option>
                                </select>
                                <div id="id_departamento-error" data-error-list> </div>
                            </div>
                            <div class="form-group col-md-3" id="d-id_provincia">
                                <label for="id_provincia">Provincia <div class="obligatorio">*</div></label>
                                <select id='id_provincia' tabindex="5" class="form-control focusNext" v-model='formulario.id_provincia'  @change='getDistrito()'>
                                    <option value='0' selected disabled >Seleccione</option>
                                    <option v-for='data in provincias' :value='data.id_provincia'>{{ data.nombre }}</option>
                                </select>
                                <div id="id_provincia-error" data-error-list> </div>
                            </div>
                            <div class="form-group col-md-3" id="d-id_distrito">
                                <label for="id_distrito">Distrito <div class="obligatorio">*</div></label>
                                <select id="id_distrito"  tabindex="6" v-model='formulario.id_distrito'  class="form-control focusNext" >
                                    <option value='0' selected disabled >Seleccione</option>
                                    <option v-for='data in distritos' :value='data.id_distrito'>{{ data.nombre }}</option>
                                </select>
                                <div id="id_distrito-error" data-error-list> </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5" id="d-direccion" >
                                <label for="direccion">Dirección <div class="obligatorio">*</div></label>
                                <input type="textarea" tabindex="7" class="form-control focusNext" id="direccion" name="direccion" v-model='formulario.direccion'  placeholder="Dirección" />
                                <div id="direccion-error" data-error-list> </div>
                            </div>

                            <div class="form-group col-md-4" id="d-sitio_web">
                                <label for="sitio_web">Sitio web</label>
                                <input type="textarea" tabindex="8" class="form-control focusNext" id="sitio_web" name="sitio_web" v-model='formulario.sitio_web'  placeholder="Sitio web" />
                                <div id="sitio_web-error" data-error-list> </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3" id="d-telefono">
                                    <label for="telefono">Teléfono <div class="obligatorio">*</div></label>
                                    <input type="text" tabindex="9" class="form-control focusNext" id="telefono" name="telefono"  v-model='formulario.telefono'  placeholder="Teléfono" />
                                    <div id="telefono-error" data-error-list> </div>
                            </div>
                            <div class="form-group col-md-3" id="d-movil">
                                <label for="movil">Móvil <div class="obligatorio">*</div></label>
                                <input type="text" tabindex="10" class="form-control focusNext" id="movil" name="movil" v-model='formulario.movil'  placeholder="Móvil" />
                                <div id="movil-error" data-error-list> </div>
                            </div>
                            <div class="form-group col-md-3" id="d-email">
                                <label for="email">Email <div class="obligatorio">*</div></label>
                                <input type="text"  tabindex="11" class="form-control focusNext" id="email" name="email" v-model='formulario.email'  placeholder="Email" />
                                <div id="email-error" data-error-list> </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5" id="d-codigo_modular">
                                    <label for="codigo_modular">Cod. Modular <div class="obligatorio">*</div></label>
                                    <input type="text"  tabindex="12" class="form-control focusNext" id="codigo_modular" name="codigo_modular" v-model='formulario.codigo_modular'  placeholder="Cod. Modular" />
                                    <div id="codigo_modular-error" data-error-list> </div>
                            </div>

                            <div class="form-group col-md-4" id="d-dre_gre">
                                <label for="dre_gre">DRE/GRE</label>
                                <input type="text" tabindex="13" class="form-control focusNext" id="dre_gre"  name="dre_gre" v-model='formulario.dre_gre'  placeholder="DRE/GRE" />
                                <div id="dre_gre-error" data-error-list> </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5" id="d-resolucion_lic">
                                    <label for="resolucion_lic">Nro Resolución Licencia</label>
                                    <input type="text" tabindex="14" class="form-control focusNext" id="resolucion_lic" name="resolucion_lic" v-model='formulario.resolucion_lic'  placeholder="Nro Resolución Licencia" />
                                    <div id="resolucion_lic-error" data-error-list> </div>
                            </div>
                            <div class="form-group col-md-4" id="d-resolucion_renova">
                                <label for="resolucion_renova">Nro Resolución Renovación</label>
                                <input type="text"  tabindex="15" class="form-control focusNext" id="resolucion_renova" name="resolucion_renova" v-model='formulario.resolucion_renova'  placeholder="Nro Resolución Renovación" />
                                <div id="resolucion_renova-error" data-error-list> </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5" id="d-facebook">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" tabindex="16" class="form-control focusNext" id="facebook"  v-model='formulario.facebook'  name="facebook" placeholder="Facebook" />
                                    <div id="facebook-error" data-error-list> </div>
                            </div>
                            <div class="form-group col-md-4" id="d-twitter">
                                <label for="twitter">Twitter</label>
                                <input type="text"  tabindex="17" class="form-control focusNext" id="twitter" name="twitter" v-model='formulario.twitter'  placeholder="Twitter" />
                                <div id="twitter-error" data-error-list> </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-9" >
                                <hr>
                                <div class="campo-obligatorio">* Campos requerido</div>
                                <div style="text-align: right;">
                                    <button tabindex="18"  type="submit" class="btn btn-primary mr-2 mb-2" id="save" >Grabar Institución</button>
                                    <router-link to="/institucion">
                                    <button tabindex="19"  type="button" class="btn btn-secondary mr-2 mb-2" id="cancelar">Cancelar</button>
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>
<script>
    import toastr from 'toastr'

    export default {
        components:{
        },
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                provincias: [],
                distritos:[],
                departamentos:[],
                institucion:[],
                formulario:{
                    nombre_ies: '',
                    abreviatura: '',
                    direccion : '',
                    id_departamento: '',
                    id_provincia : '',
                    id_distrito : '',
                    telefono: '',
                    movil : '',
                    email : '',
                    sitio_web : '',
                    codigo_modular : '',
                    tipo_gestion : '',
                    dre_gre : '',
                    resolucion_lic : '',
                    resolucion_renova : '',
                    facebook : '',
                    twitter : ''
                }
            }
        },
        methods:{
            getDepartamento: function(){
                axios.get('/departamento')
                  .then(function (response) {
                     this.departamentos = response.data;
                  }.bind(this));
            },
            getProvincia: function() {
                this.formulario.id_provincia = 0;
                this.formulario.id_distrito = 0;
                const departamento = this.formulario.id_departamento;
                axios.get('/provincia/'+departamento).then(function(response){
                    this.provincias = response.data;
                }.bind(this));
            },
            getDistrito: function() {
                this.formulario.id_distrito = 0;
                const departamento = this.formulario.id_departamento;
                const provincia = this.formulario.id_provincia;
                axios.get('/distrito/'+ departamento +'/'+ provincia).then(function(response){
                    this.distritos = response.data;
                }.bind(this));
            },
            Save:function(){
                ButtonProcessSave();
                axios.post('/institucion',this.formulario).then(respuesta => {
                        ButtonProcessSave();
                        if (respuesta.data.success = 'true')
                        {
                            toastr.success('Se ha creado correctamente el registro','Exito:');
                            // this.$router.go(-1);
                            this.$router.push({name: 'institucion'});
                        }
                    })
                    .catch(error => {
                        if (error.response.status == 422) //Error Formularios
                        {
                            ButtonNormalSave();
                            ErrorsForm(error);
                        }
                        if (error.response.status == 500) //Error: del servidor interno
                        {
                            toastr.error(error.response.data.message ,'Error:');
                            ButtonNormalSave();
                        }
                        if (error.response.status == 503) //Servicio no disponible
                        {
                            toastr.error(error.response.data.message ,'Error:');
                            ButtonNormalSave();
                        }
                    })
            }
        },
        created: function(){
            this.getDepartamento();
            this.formulario.id_departamento = '';
            this.formulario.id_provincia = '';
            this.formulario.id_distrito = '';
        }

    }
    function ErrorsForm(errors) {

        if (errors.response.data.errors.nombre_ies != null)
        {
            $("#d-nombre_ies").addClass("has-danger");
            $("#nombre_ies").addClass("has-danger");
            $("#nombre_ies-error").addClass("form-control-error");
            $("#nombre_ies-error").html(errors.response.data.errors.nombre_ies);
        }
        else
        {
            $("#d-nombre_ies").removeClass("has-danger");
            $("#nombre_ies").removeClass("has-danger");
            $("#nombre_ies-error").removeClass("form-control-error");
            $("#nombre_ies-error").html("");
        }

        if (errors.response.data.errors.abreviatura != null)
        {
            $("#d-abreviatura").addClass("has-danger");
            $("#abreviatura").addClass("has-danger");
            $("#abreviatura-error").addClass("form-control-error");
            $("#abreviatura-error").html(errors.response.data.errors.abreviatura);
        }
        else
        {
            $("#d-abreviatura").removeClass("has-danger");
            $("#abreviatura").removeClass("has-danger");
            $("#abreviatura-error").removeClass("form-control-error");
            $("#abreviatura-error").html("");
        }

        if (errors.response.data.errors.tipo_gestion != null)
        {
            $("#d-tipo_gestion").addClass("has-danger");
            $("#tipo_gestion").addClass("has-danger");
            $("#tipo_gestion-error").addClass("form-control-error");
            $("#tipo_gestion-error").html(errors.response.data.errors.tipo_gestion);
        }
        else
        {
            $("#d-tipo_gestion").removeClass("has-danger");
            $("#tipo_gestion").removeClass("has-danger");
            $("#tipo_gestion-error").removeClass("form-control-error");
            $("#tipo_gestion-error").html("");
        }


        if (errors.response.data.errors.direccion != null)
        {
            $("#d-direccion").addClass("has-danger");
            $("#direccion").addClass("has-danger");
            $("#direccion-error").addClass("form-control-error");
            $("#direccion-error").html(errors.response.data.errors.direccion);
        }
        else
        {
            $("#d-direccion").removeClass("has-danger");
            $("#direccion").removeClass("has-danger");
            $("#direccion-error").removeClass("form-control-error");
            $("#direccion-error").html("");
        }

        if (errors.response.data.errors.id_departamento != null)
        {
            $("#d-id_departamento").addClass("has-danger");
            $("#id_departamento").addClass("has-danger");
            $("#id_departamento-error").addClass("form-control-error");
            $("#id_departamento-error").html(errors.response.data.errors.id_departamento);
        }
        else
        {
            $("#d-id_departamento").removeClass("has-danger");
            $("#id_departamento").removeClass("has-danger");
            $("#id_departamento-error").removeClass("form-control-error");
            $("#id_departamento-error").html("");
        }

        if (errors.response.data.errors.id_provincia != null)
        {
            $("#d-id_provincia").addClass("has-danger");
            $("#id_provincia").addClass("has-danger");
            $("#id_provincia-error").addClass("form-control-error");
            $("#id_provincia-error").html(errors.response.data.errors.id_provincia);
        }
        else
        {
            $("#d-id_provincia").removeClass("has-danger");
            $("#id_provincia").removeClass("has-danger");
            $("#id_provincia-error").removeClass("form-control-error");
            $("#id_provincia-error").html("");
        }

        if (errors.response.data.errors.id_distrito != null)
        {
            $("#d-id_distrito").addClass("has-danger");
            $("#id_distrito").addClass("has-danger");
            $("#id_distrito-error").addClass("form-control-error");
            $("#id_distrito-error").html(errors.response.data.errors.id_distrito);
        }
        else
        {
            $("#d-id_distrito").removeClass("has-danger");
            $("#id_distrito").removeClass("has-danger");
            $("#id_distrito-error").removeClass("form-control-error");
            $("#id_distrito-error").html("");
        }

        if (errors.response.data.errors.telefono != null)
        {
            $("#d-telefono").addClass("has-danger");
            $("#telefono").addClass("has-danger");
            $("#telefono-error").addClass("form-control-error");
            $("#telefono-error").html(errors.response.data.errors.telefono);
        }
        else
        {
            $("#d-telefono").removeClass("has-danger");
            $("#telefono").removeClass("has-danger");
            $("#telefono-error").removeClass("form-control-error");
            $("#telefono-error").html("");
        }

        if (errors.response.data.errors.telefono != null)
        {
            $("#d-telefono").addClass("has-danger");
            $("#telefono").addClass("has-danger");
            $("#telefono-error").addClass("form-control-error");
            $("#telefono-error").html(errors.response.data.errors.telefono);
        }
        else
        {
            $("#d-telefono").removeClass("has-danger");
            $("#telefono").removeClass("has-danger");
            $("#telefono-error").removeClass("form-control-error");
            $("#telefono-error").html("");
        }

        if (errors.response.data.errors.movil != null)
        {
            $("#d-movil").addClass("has-danger");
            $("#movil").addClass("has-danger");
            $("#movil-error").addClass("form-control-error");
            $("#movil-error").html(errors.response.data.errors.movil);
        }
        else
        {
            $("#d-movil").removeClass("has-danger");
            $("#movil").removeClass("has-danger");
            $("#movil-error").removeClass("form-control-error");
            $("#movil-error").html("");
        }

        if (errors.response.data.errors.email != null)
        {
            $("#d-email").addClass("has-danger");
            $("#email").addClass("has-danger");
            $("#email-error").addClass("form-control-error");
            $("#email-error").html(errors.response.data.errors.email);
        }
        else
        {
            $("#d-email").removeClass("has-danger");
            $("#email").removeClass("has-danger");
            $("#email-error").removeClass("form-control-error");
            $("#email-error").html("");
        }

        if (errors.response.data.errors.sitio_web != null)
        {
            $("#d-sitio_web").addClass("has-danger");
            $("#sitio_web").addClass("has-danger");
            $("#sitio_web-error").addClass("form-control-error");
            $("#sitio_web-error").html(errors.response.data.errors.sitio_web);
        }
        else
        {
            $("#d-sitio_web").removeClass("has-danger");
            $("#sitio_web").removeClass("has-danger");
            $("#sitio_web-error").removeClass("form-control-error");
            $("#sitio_web-error").html("");
        }

        if (errors.response.data.errors.codigo_modular != null)
        {
            $("#d-codigo_modular").addClass("has-danger");
            $("#codigo_modular").addClass("has-danger");
            $("#codigo_modular-error").addClass("form-control-error");
            $("#codigo_modular-error").html(errors.response.data.errors.codigo_modular);
        }
        else
        {
            $("#d-codigo_modular").removeClass("has-danger");
            $("#codigo_modular").removeClass("has-danger");
            $("#codigo_modular-error").removeClass("form-control-error");
            $("#codigo_modular-error").html("");
        }

        if (errors.response.data.errors.tipo_gestion != null)
        {
            $("#d-tipo_gestion").addClass("has-danger");
            $("#tipo_gestion").addClass("has-danger");
            $("#tipo_gestion-error").addClass("form-control-error");
            $("#tipo_gestion-error").html(errors.response.data.errors.tipo_gestion);
        }
        else
        {
            $("#d-tipo_gestion").removeClass("has-danger");
            $("#tipo_gestion").removeClass("has-danger");
            $("#tipo_gestion-error").removeClass("form-control-error");
            $("#tipo_gestion-error").html("");
        }

         if (errors.response.data.errors.dre_gre != null)
        {
            $("#d-dre_gre").addClass("has-danger");
            $("#dre_gre").addClass("has-danger");
            $("#dre_gre-error").addClass("form-control-error");
            $("#dre_gre-error").html(errors.response.data.errors.dre_gre);
        }
        else
        {
            $("#d-dre_gre").removeClass("has-danger");
            $("#dre_gre").removeClass("has-danger");
            $("#dre_gre-error").removeClass("form-control-error");
            $("#dre_gre-error").html("");
        }
         if (errors.response.data.errors.resolucion_lic != null)
        {
            $("#d-resolucion_lic").addClass("has-danger");
            $("#resolucion_lic").addClass("has-danger");
            $("#resolucion_lic-error").addClass("form-control-error");
            $("#resolucion_lic-error").html(errors.response.data.errors.resolucion_lic);
        }
        else
        {
            $("#d-resolucion_lic").removeClass("has-danger");
            $("#resolucion_lic").removeClass("has-danger");
            $("#resolucion_lic-error").removeClass("form-control-error");
            $("#resolucion_lic-error").html("");
        }
         if (errors.response.data.errors.resolucion_renova != null)
        {
            $("#d-resolucion_renova").addClass("has-danger");
            $("#resolucion_renova").addClass("has-danger");
            $("#resolucion_renova-error").addClass("form-control-error");
            $("#resolucion_renova-error").html(errors.response.data.errors.resolucion_renova);
        }
        else
        {
            $("#d-resolucion_renova").removeClass("has-danger");
            $("#resolucion_renova").removeClass("has-danger");
            $("#resolucion_renova-error").removeClass("form-control-error");
            $("#resolucion_renova-error").html("");
        }
         if (errors.response.data.errors.facebook != null)
        {
            $("#d-facebook").addClass("has-danger");
            $("#facebook").addClass("has-danger");
            $("#facebook-error").addClass("form-control-error");
            $("#facebook-error").html(errors.response.data.errors.facebook);
        }
        else
        {
            $("#d-facebook").removeClass("has-danger");
            $("#facebook").removeClass("has-danger");
            $("#facebook-error").removeClass("form-control-error");
            $("#facebook-error").html("");
        }

         if (errors.response.data.errors.twitter != null)
        {
            $("#d-twitter").addClass("has-danger");
            $("#twitter").addClass("has-danger");
            $("#twitter-error").addClass("form-control-error");
            $("#twitter-error").html(errors.response.data.errors.twitter);
        }
        else
        {
            $("#d-twitter").removeClass("has-danger");
            $("#twitter").removeClass("has-danger");
            $("#twitter-error").removeClass("form-control-error");
            $("#twitter-error").html("");
        }

    }
    function ButtonProcessSave() {
      $('#save').attr('disabled', 'disabled');
      $('#save').addClass("btn btn-primary mr-2 mb-2");
      $('#save').html("<img src='zamar/loading.svg'> Grabar Institución");
    }
    function ButtonNormalSave () {
        $('#save').addClass("btn btn-primary mr-2 mb-2");
        $('#save').attr('disabled', false);
        $('#save').html("Grabar Institución");
    }
    document.addEventListener('keypress', function(evt) {
        if (evt.key !== 'Enter') {
        return;
        }
        let element = evt.target;
        if (!element.classList.contains('focusNext')) {
        return;
        }
        let tabIndex = element.tabIndex + 1;
        var next = document.querySelector('[tabindex="'+tabIndex+'"]');

        if (next) {
        next.focus();
        event.preventDefault();
        }
    });

</script>
