<template>
    <div class="air__layout__content">
      <div class="air__utils__content">
        <!-- Breadcrumb -->
        <div class="row">
          <div class="col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><router-link to="/" > Panel de Control </router-link> </a></li>
                <li class="breadcrumb-item"><a href="#"><router-link to="/alumnofamiliar"> Relación de Estudiantes </router-link> </a></li>
                <li class="breadcrumb-item active" aria-current="page">Actualizacion Datos</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="air__utils__heading">
        <h3>
            <span class="mr-3">Actualizacion de Datos Estudiante</span>
        </h3>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-5" >

                    <spinner-component v-show='loading'></spinner-component>
                    <form v-if="!loading" @submit.prevent="Update">

                      <div class="card" style="padding-left: 12px; padding-right: 12px;">
                        <h4 class="card-header">Datos Personales</h4>
                        <div class="form-row" style="padding-top: 12px;">

                          <div class="form-group col-md-4" id="d-apellidos">
                                  <label for="apellidos">Apellidos:</label>
                                  <input type="text" tabindex="1" class="form-control focusNext" id="apellidos" name="apellidos"  v-model='formulario.apellidos' disabled/>
                                  <div id="apellidos-error" data-error-list> </div>
                          </div>

                          <div class="form-group col-md-4" id="d-nombres">
                                  <label for="nombres">Nombres:</label>
                                  <input type="text" tabindex="2" class="form-control focusNext" id="nombres" name="nombres"  v-model='formulario.nombres' disabled/>
                                  <div id="nombres-error" data-error-list> </div>
                          </div>

                          <div class="form-group col-md-4" id="d-dni">
                                  <label for="dni">DNI:</label>
                                  <input type="text" tabindex="3" class="form-control focusNext" id="dni" name="dni"  v-model='formulario.dni' disabled/>
                                  <div id="dni-error" data-error-list> </div>
                          </div>

                        </div>

                      </div>

                      <div class="card" style="padding-left: 12px; padding-right: 12px;">
                        <h4 class="card-header">Datos Familiares</h4>
                        <div class="form-row" style="padding-top: 12px;">

                          <div class="form-group col-md-4" id="d-id_instruccion">
                              <label for="id_instruccion">Nivel Instrucción del Padre:<div class="obligatorio">*</div></label>
                              <select id='id_instruccion' name="id_instruccion" tabindex="4" class='form-control focusNext' v-model='formulario.id_instruccion' >
                                <option value='' selected disabled >Seleccione</option>
                                <option v-for='data in instrucciones' :value='data.id_instruccion'>{{ data.nombre }}</option>
                              </select>
                              <div id="id_instruccion-error" data-error-list> </div>
                          </div>

                          <div class="form-group col-md-4" id="d-id_ocupacion">
                              <label for="id_ocupacion">Ocupación del Padre:<div class="obligatorio">*</div></label>
                              <select id='id_ocupacion' name="id_ocupacion" tabindex="5" class='form-control focusNext' v-model='formulario.id_ocupacion' >
                                <option value='' selected disabled >Seleccione</option>
                                <option v-for='data in ocupaciones' :value='data.id_ocupacion'>{{ data.nombre }}</option>
                              </select>
                              <div id="id_ocupacion-error" data-error-list> </div>
                          </div>

                          <div class="form-group col-md-4" id="d-id_vivienda">
                              <label for="id_vivienda">Vivienda:<div class="obligatorio">*</div></label>
                              <select id='id_vivienda' name="id_vivienda" tabindex="6" class='form-control focusNext' v-model='formulario.id_vivienda' >
                                <option value='' selected disabled >Seleccione</option>
                                <option v-for='data in viviendas' :value='data.id_vivienda'>{{ data.nombre }}</option>
                              </select>
                              <div id="id_vivienda-error" data-error-list> </div>
                          </div>

                          <div class="form-group col-md-4" id="d-id_persona_vive">
                              <label for="id_persona_vive">Nro Personas Vive:<div class="obligatorio">*</div></label>
                              <select id='id_persona_vive' name="id_persona_vive" tabindex="7" class='form-control focusNext' v-model='formulario.id_persona_vive' >
                                <option value='' selected disabled >Seleccione</option>
                                <option v-for='data in personasvives' :value='data.id_persona_vive'>{{ data.nombre }}</option>
                              </select>
                              <div id="id_persona_vive-error" data-error-list> </div>
                          </div>

                          <div class="form-group col-md-4" id="d-id_conquien_vive">
                              <label for="id_conquien_vive">Con quien vive:<div class="obligatorio">*</div></label>
                              <select id='id_conquien_vive' name="id_conquien_vive" tabindex="8" class='form-control focusNext' v-model='formulario.id_conquien_vive' >
                                <option value='' selected disabled >Seleccione</option>
                                <option v-for='data in conquienvives' :value='data.id_conquien_vive'>{{ data.nombre }}</option>
                              </select>
                              <div id="id_conquien_vive-error" data-error-list> </div>
                          </div>

                          <div class="form-group col-md-4" id="d-id_labora">
                              <label for="id_labora">Labora / Trabaja:<div class="obligatorio">*</div></label>
                              <select id='id_labora' name="id_labora" tabindex="9" class='form-control focusNext' v-model='formulario.id_labora' >
                                <option value='' selected disabled >Seleccione</option>
                                <option v-for='data in laboras' :value='data.id_labora'>{{ data.nombre }}</option>
                              </select>
                              <div id="id_labora-error" data-error-list> </div>
                          </div>

                          <div class="form-group col-md-4" id="d-id_dependencia">
                              <label for="id_dependencia">Depende económicamente:<div class="obligatorio">*</div></label>
                              <select id='id_dependencia' name="id_dependencia" tabindex="10" class='form-control focusNext' v-model='formulario.id_dependencia' >
                                <option value='' selected disabled >Seleccione</option>
                                <option v-for='data in dependencias' :value='data.id_dependencia'>{{ data.nombre }}</option>
                              </select>
                              <div id="id_dependencia-error" data-error-list> </div>
                          </div>

                          <div class="form-group col-md-4" id="d-id_financia">
                              <label for="id_financia">Quien Financias sus estudios:<div class="obligatorio">*</div></label>
                              <select id='id_financia' name="id_financia" tabindex="11" class='form-control focusNext' v-model='formulario.id_financia' >
                                <option value='' selected disabled >Seleccione</option>
                                <option v-for='data in financias' :value='data.id_financia'>{{ data.nombre }}</option>
                              </select>
                              <div id="id_financia-error" data-error-list> </div>
                          </div>

                          <!--<div class="form-group col-md-4" id="d-depedencia_ud">
                                  <label for="depedencia_ud">Alguien depende económicamente de ud:<div class="obligatorio">*</div></label>
                                  <input type="text" tabindex="12" class="form-control focusNext" id="depedencia_ud" name="depedencia_ud" v-model='formulario.depedencia_ud'  placeholder="Nro Resolución Licencia" />
                                  <div id="depedencia_ud-error" data-error-list> </div>
                          </div>-->

                          <div class="form-group col-md-4" id="d-depedencia_ud">
                              <label for="depedencia_ud">¿Alguien depende económicamente de ud? <div class="obligatorio">*</div></label>
                              <select id='depedencia_ud' name="depedencia_ud" tabindex="12" class='form-control focusNext' v-model='formulario.depedencia_ud' >
                                <option selected disabled >Seleccione</option>
                                <option>SI</option>
                                <option>NO</option>
                              </select>
                              <div id="depedencia_ud-error" data-error-list> </div>
                          </div>

                        </div>

                      </div>

                      <div class="card" style="padding-left: 12px; padding-right: 12px;">
                        <h4 class="card-header">Contacto</h4>
                        <div class="form-row" style="padding-top: 12px;">

                          <div class="form-group col-md-2" id="d-movil">
                                  <label for="movil">Celular:<div class="obligatorio">*</div></label>
                                  <input type="text" tabindex="13" class="form-control focusNext" id="movil" name="movil" v-model='formulario.movil'  placeholder="Nro Celular" />
                                  <div id="movil-error" data-error-list> </div>
                          </div>

                          <div class="form-group col-md-2" id="d-telefono_fijo">
                                  <label for="telefono_fijo">Telefono Fijo:<div class="obligatorio">*</div></label>
                                  <input type="text" tabindex="14" class="form-control focusNext" id="telefono_fijo" name="telefono_fijo" v-model='formulario.telefono_fijo'  placeholder="Nro Telefono " />
                                  <div id="telefono_fijo-error" data-error-list> </div>
                          </div>

                          <div class="form-group col-md-4" id="d-email">
                                  <label for="email">Email Personal:<div class="obligatorio">*</div></label>
                                  <input type="text" tabindex="15" class="form-control focusNext" id="email" name="email" v-model='formulario.email'  placeholder="Email" />
                                  <div id="email-error" data-error-list> </div>
                          </div>

                          <div class="form-group col-md-4" id="d-email_institucion">
                                  <label for="email_institucion">Email Institucional:<div class="obligatorio">*</div></label>
                                  <input type="text" tabindex="16" class="form-control focusNext" id="email_institucion" name="email_institucion" v-model='formulario.email_institucion'  placeholder="Email Institucional" />
                                  <div id="email_institucion-error" data-error-list> </div>
                          </div>


                        </div>

                      </div>

                      <div class="card" style="padding-left: 12px; padding-right: 12px;">
                        <h4 class="card-header">Redes Sociales</h4>
                        <div class="form-row" style="padding-top: 12px;">

                          <div class="form-group col-md-4" id="d-facebook">
                                  <label for="facebook">Facebook:<div class="obligatorio">*</div></label>
                                  <input type="text" tabindex="17" class="form-control focusNext" id="facebook" name="facebook" v-model='formulario.facebook'  placeholder="Facebook" />
                                  <div id="facebook-error" data-error-list> </div>
                          </div>

                          <div class="form-group col-md-4" id="d-twitter">
                                  <label for="twitter">Twitter:<div class="obligatorio">*</div></label>
                                  <input type="text" tabindex="18" class="form-control focusNext" id="twitter" name="twitter" v-model='formulario.twitter'  placeholder="Twitter" />
                                  <div id="twitter-error" data-error-list> </div>
                          </div>

                          <div class="form-group col-md-4" id="d-instagram">
                                  <label for="instagram">Instagram:<div class="obligatorio">*</div></label>
                                  <input type="text" tabindex="19" class="form-control focusNext" id="instagram" name="instagram" v-model='formulario.instagram'  placeholder="Instagram" />
                                  <div id="instagram-error" data-error-list> </div>
                          </div>


                        </div>

                      </div>

                      <div class="card" style="padding-left: 12px; padding-right: 12px;">
                        <h4 class="card-header">Tutoria</h4>
                        <div class="form-row" style="padding-top: 12px;">

                          <!--<div class="form-group col-md-4" id="d-tutoria">
                                  <label for="tutoria">¿Desea Recibir Tutoria?<div class="obligatorio">*</div></label>
                                  <input type="text" tabindex="20" class="form-control focusNext" id="tutoria" name="tutoria" v-model='formulario.tutoria'  placeholder="Nro Resolución Licencia" />
                                  <div id="tutoria-error" data-error-list> </div>
                          </div>-->

                          <div class="form-group col-md-4" id="d-tutoria">
                              <label for="tutoria">¿Desea Recibir Tutoria? <div class="obligatorio">*</div></label>
                              <select id='tutoria' name="tutoria" tabindex="20" class='form-control focusNext' v-model='formulario.tutoria' >
                                <option selected disabled >Seleccione</option>
                                <option>SI</option>
                                <option>NO</option>
                              </select>
                              <div id="tutoria-error" data-error-list> </div>
                          </div>

                        </div>

                      </div>


                        <div class="form-row">
                            <div class="form-group col-md-12" style="text-align: right;">
                                <hr>
                                <div class="campo-obligatorio">* Campos requerido</div>
                                <div style="text-align: right;">
                                    <button type="submit" tabindex="18" class="btn btn-primary mr-2 mb-2" id="save" >Actualizar Estudiante</button>
                                    <router-link to="/alumnofamiliar">
                                    <button type="button"  tabindex="19" class="btn btn-secondary mr-2 mb-2" id="cancelar">Cancelar</button>
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

        data(){
            return {

                conquienvives:[],
                dependencias:[],
                financias:[],
                instrucciones:[],
                laboras:[],
                ocupaciones:[],
                personasvives:[],
                viviendas:[],
                alumno_familiar:[],
                loading: true,
                agente: false,
			    // Data
                formulario:{
                    depedencia_ud: '',
                    movil: '',
                    telefono_fijo : '',
                    email: '',
                    email_institucion : '',
                    facebook : '',
                    twitter: '',
                    instagram : '',
                    tutoria : '',
                    id_persona_vive : '',
                    id_ocupacion : '',
                    id_dependencia : '',
                    id_instruccion : '',
                    id_labora : '',
                    id_vivienda : '',
                    id_financia : '',
                    id_conquien_vive : ''
                }
            }
        },
        methods: {


            getConquienVive: function () {
                axios.get('/comboconquienvive')
                    .then(function (response) {
                        this.conquienvives = response.data;
                    }.bind(this));
            },
            getDependencia: function () {
                axios.get('/combodependencia')
                    .then(function (response) {
                        this.dependencias = response.data;
                    }.bind(this));
            },
            getFinancia: function () {
                axios.get('/combofinancia')
                    .then(function (response) {
                        this.financias = response.data;
                    }.bind(this));
            },
            getInstruccion: function () {
                axios.get('/comboinstruccion')
                    .then(function (response) {
                        this.instrucciones = response.data;
                    }.bind(this));
            },
            getLabora: function () {
                axios.get('/combolabora')
                    .then(function (response) {
                        this.laboras = response.data;
                    }.bind(this));
            },
            getOcupacion: function () {
                axios.get('/comboocupacion')
                    .then(function (response) {
                        this.ocupaciones = response.data;
                    }.bind(this));
            },
            getPersonasVive: function () {
                axios.get('/combopersonasvive')
                    .then(function (response) {
                        this.personasvives = response.data;
                    }.bind(this));
            },
            getVivienda: function () {
                axios.get('/combovivienda')
                    .then(function (response) {
                        this.viviendas = response.data;
                    }.bind(this));
            },

            Update:function(){
                ButtonProcessSave();
                axios.put('/alumnofamiliar/'+ this.$route.params.id ,this.formulario).then(respuesta => {
                        ButtonProcessSave();
                        if (respuesta.data.success = 'true')
                        {
                            toastr.success('Se ha actualizado correctamente el registro','Exito:');
                            this.$router.push({name: 'alumnofamiliar'});
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
        mounted(){
            this.agente = false;
            this.loading = true;
            axios.get('alumnofamiliar/'+ this.$route.params.id +'/edit/').then((response)=>{

                if (response.data == ''){
                    swal({
                      title: '¡No se encuentra el registro!',
                      type: 'error',
                      showCancelButton: false,
                      cancelButtonClass: 'btn-secondary mr-2 mb-2',
                      confirmButtonClass: 'btn-danger mr-2 mb-2',
                      confirmButtonText: 'Aceptar',
                     });
                    this.$router.push({name: 'alumnofamiliar'});
                }

                this.formulario = response.data;
                this.loading = false;
                this.getConquienVive();
                this.getDependencia();
                this.getFinancia();
                this.getInstruccion();
                this.getLabora();
                this.getOcupacion();
                this.getPersonasVive();
                this.getVivienda();

            });
        }
    }
    function ErrorsForm(errors) {

        if (errors.response.data.errors.depedencia_ud != null)
        {
            $("#d-depedencia_ud").addClass("has-danger");
            $("#depedencia_ud").addClass("has-danger");
            $("#depedencia_ud-error").addClass("form-control-error");
            $("#depedencia_ud-error").html(errors.response.data.errors.depedencia_ud);
        }
        else
        {
            $("#d-depedencia_ud").removeClass("has-danger");
            $("#depedencia_ud").removeClass("has-danger");
            $("#depedencia_ud-error").removeClass("form-control-error");
            $("#depedencia_ud-error").html("");
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

        if (errors.response.data.errors.telefono_fijo != null)
        {
            $("#d-telefono_fijo").addClass("has-danger");
            $("#telefono_fijo").addClass("has-danger");
            $("#telefono_fijo-error").addClass("form-control-error");
            $("#telefono_fijo-error").html(errors.response.data.errors.telefono_fijo);
        }
        else
        {
            $("#d-telefono_fijo").removeClass("has-danger");
            $("#telefono_fijo").removeClass("has-danger");
            $("#telefono_fijo-error").removeClass("form-control-error");
            $("#telefono_fijo-error").html("");
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

        if (errors.response.data.errors.email_institucion != null)
        {
            $("#d-email_institucion").addClass("has-danger");
            $("#email_institucion").addClass("has-danger");
            $("#email_institucion-error").addClass("form-control-error");
            $("#email_institucion-error").html(errors.response.data.errors.email_institucion);
        }
        else
        {
            $("#d-email_institucion").removeClass("has-danger");
            $("#email_institucion").removeClass("has-danger");
            $("#email_institucion-error").removeClass("form-control-error");
            $("#email_institucion-error").html("");
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

        if (errors.response.data.errors.instagram != null)
        {
            $("#d-instagram").addClass("has-danger");
            $("#instagram").addClass("has-danger");
            $("#instagram-error").addClass("form-control-error");
            $("#instagram-error").html(errors.response.data.errors.instagram);
        }
        else
        {
            $("#d-instagram").removeClass("has-danger");
            $("#instagram").removeClass("has-danger");
            $("#instagram-error").removeClass("form-control-error");
            $("#instagram-error").html("");
        }

        if (errors.response.data.errors.tutoria != null)
        {
            $("#d-tutoria").addClass("has-danger");
            $("#tutoria").addClass("has-danger");
            $("#tutoria-error").addClass("form-control-error");
            $("#tutoria-error").html(errors.response.data.errors.tutoria);
        }
        else
        {
            $("#d-tutoria").removeClass("has-danger");
            $("#tutoria").removeClass("has-danger");
            $("#tutoria-error").removeClass("form-control-error");
            $("#tutoria-error").html("");
        }

        if (errors.response.data.errors.id_persona_vive != null)
        {
            $("#d-id_persona_vive").addClass("has-danger");
            $("#id_persona_vive").addClass("has-danger");
            $("#id_persona_vive-error").addClass("form-control-error");
            $("#id_persona_vive-error").html(errors.response.data.errors.id_persona_vive);
        }
        else
        {
            $("#d-id_persona_vive").removeClass("has-danger");
            $("#id_persona_vive").removeClass("has-danger");
            $("#id_persona_vive-error").removeClass("form-control-error");
            $("#id_persona_vive-error").html("");
        }

        if (errors.response.data.errors.id_ocupacion != null)
        {
            $("#d-id_ocupacion").addClass("has-danger");
            $("#id_ocupacion").addClass("has-danger");
            $("#id_ocupacion-error").addClass("form-control-error");
            $("#id_ocupacion-error").html(errors.response.data.errors.id_ocupacion);
        }
        else
        {
            $("#d-id_ocupacion").removeClass("has-danger");
            $("#id_ocupacion").removeClass("has-danger");
            $("#id_ocupacion-error").removeClass("form-control-error");
            $("#id_ocupacion-error").html("");
        }

        if (errors.response.data.errors.id_dependencia != null)
        {
            $("#d-id_dependencia").addClass("has-danger");
            $("#id_dependencia").addClass("has-danger");
            $("#id_dependencia-error").addClass("form-control-error");
            $("#id_dependencia-error").html(errors.response.data.errors.id_dependencia);
        }
        else
        {
            $("#d-id_dependencia").removeClass("has-danger");
            $("#id_dependencia").removeClass("has-danger");
            $("#id_dependencia-error").removeClass("form-control-error");
            $("#id_dependencia-error").html("");
        }

        if (errors.response.data.errors.id_instruccion != null)
        {
            $("#d-id_instruccion").addClass("has-danger");
            $("#id_instruccion").addClass("has-danger");
            $("#id_instruccion-error").addClass("form-control-error");
            $("#id_instruccion-error").html(errors.response.data.errors.id_instruccion);
        }
        else
        {
            $("#d-id_instruccion").removeClass("has-danger");
            $("#id_instruccion").removeClass("has-danger");
            $("#id_instruccion-error").removeClass("form-control-error");
            $("#id_instruccion-error").html("");
        }

        if (errors.response.data.errors.id_labora != null)
        {
            $("#d-id_labora").addClass("has-danger");
            $("#id_labora").addClass("has-danger");
            $("#id_labora-error").addClass("form-control-error");
            $("#id_labora-error").html(errors.response.data.errors.id_labora);
        }
        else
        {
            $("#d-id_labora").removeClass("has-danger");
            $("#id_labora").removeClass("has-danger");
            $("#id_labora-error").removeClass("form-control-error");
            $("#id_labora-error").html("");
        }

         if (errors.response.data.errors.id_vivienda != null)
        {
            $("#d-id_vivienda").addClass("has-danger");
            $("#id_vivienda").addClass("has-danger");
            $("#id_vivienda-error").addClass("form-control-error");
            $("#id_vivienda-error").html(errors.response.data.errors.id_vivienda);
        }
        else
        {
            $("#d-id_vivienda").removeClass("has-danger");
            $("#id_vivienda").removeClass("has-danger");
            $("#id_vivienda-error").removeClass("form-control-error");
            $("#id_vivienda-error").html("");
        }
         if (errors.response.data.errors.id_financia != null)
        {
            $("#d-id_financia").addClass("has-danger");
            $("#id_financia").addClass("has-danger");
            $("#id_financia-error").addClass("form-control-error");
            $("#id_financia-error").html(errors.response.data.errors.id_financia);
        }
        else
        {
            $("#d-id_financia").removeClass("has-danger");
            $("#id_financia").removeClass("has-danger");
            $("#id_financia-error").removeClass("form-control-error");
            $("#id_financia-error").html("");
        }
         if (errors.response.data.errors.id_conquien_vive != null)
        {
            $("#d-id_conquien_vive").addClass("has-danger");
            $("#id_conquien_vive").addClass("has-danger");
            $("#id_conquien_vive-error").addClass("form-control-error");
            $("#id_conquien_vive-error").html(errors.response.data.errors.id_conquien_vive);
        }
        else
        {
            $("#d-id_conquien_vive").removeClass("has-danger");
            $("#id_conquien_vive").removeClass("has-danger");
            $("#id_conquien_vive-error").removeClass("form-control-error");
            $("#id_conquien_vive-error").html("");
        }


    }
    function ButtonProcessSave() {
      $('#save').attr('disabled', 'disabled');
      $('#save').addClass("btn btn-primary mr-2 mb-2");
      $('#save').html("<img src='zamar/loading.svg'> Actualizar Estudiante");
    }
    function ButtonNormalSave () {
      $('#save').addClass("btn btn-primary mr-2 mb-2");
      $('#save').attr('disabled', false);
      $('#save').html("Actualizar Estudiante");
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
