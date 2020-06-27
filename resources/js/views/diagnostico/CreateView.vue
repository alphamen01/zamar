<template>
    <div class="air__layout__content">
      <div class="air__utils__content">
        <!-- Breadcrumb -->
        <div class="row">
          <div class="col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><router-link to="/" > Panel de Control </router-link> </a></li>
                <li class="breadcrumb-item active" aria-current="page">Asignar Tutoria</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="air__utils__heading">
        <h3>
            <span class="mr-3">Asignar Tutoria</span>
        </h3>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-5" >
                    <h4 class="mb-4">
                        <strong>Estudiante</strong>
                    </h4>
                    <form @submit.prevent="Save">
                        <div class="form-row">
                            <div class="form-group col-md-5" id="d-id_estudiante">
                                <label for="id_estudiante">Estudiante <div class="obligatorio">*</div></label>
                                <select id='id_estudiante' name="id_estudiante" tabindex="4" class='form-control focusNext' v-model='formulario.id_estudiante' >
                                  <option value='' selected disabled >Seleccione</option>
                                  <option v-for='data in estudiantes' :value='data.id_estudiante'>{{ data.apellidos+'  ,  '+data.nombres }}</option>
                                </select>
                                <div id="id_estudiante-error" data-error-list> </div>
                            </div>
                            <div class="form-group col-md-4" id="d-fecha">
                                    <label for="fecha">Fecha<div class="obligatorio">*</div></label>
                                    <input type="date" tabindex="1" class="form-control focusNext" v-model='formulario.fecha' id="fecha" name ='fecha'  />
                                    <div id="fecha-error" data-error-list> </div>
                            </div>
                        </div>
                        <div class="form-row">

                          <div class="form-group col-md-6" id="d-p_salud">
                            <label for="p_salud">Problema de Salud <div class="obligatorio">*</div></label>
                            <b-form-textarea  tabindex="7" class="form-control focusNext" id="p_salud" name="p_salud"
                              v-model='formulario.p_salud' placeholder="Insert text" rows="3" no-resize>
                            </b-form-textarea>
                            <div id="p_salud-error" data-error-list> </div>
                          </div>


                        <!--  <div class="form-group col-md-6" id="d-p_salud" >
                              <label for="p_salud">Problema de Salud <div class="obligatorio">*</div></label>
                              <input type="textarea" tabindex="7" class="form-control focusNext" id="p_salud" name="p_salud" v-model='formulario.p_salud'  placeholder="Insert text" />
                              <div id="p_salud-error" data-error-list> </div>
                          </div>-->

                          <div class="form-group col-md-6" id="d-h_alimentos" >
                            <label for="h_alimentos">Habitos Alimenticios <div class="obligatorio">*</div></label>
                            <b-form-textarea  tabindex="7" class="form-control focusNext" id="h_alimentos" name="h_alimentos"
                              v-model='formulario.h_alimentos' placeholder="Insert text" rows="3" no-resize>
                            </b-form-textarea>
                            <div id="h_alimentos-error" data-error-list> </div>
                          </div>

                          <!--<div class="form-group col-md-6" id="d-h_alimentos" >
                              <label for="h_alimentos">Habitos Alimenticios <div class="obligatorio">*</div></label>
                              <input type="textarea" tabindex="7" class="form-control focusNext" id="h_alimentos" name="h_alimentos" v-model='formulario.h_alimentos'  placeholder="Insert text" />
                              <div id="h_alimentos-error" data-error-list> </div>
                          </div>-->

                          <div class="form-group col-md-6" id="d-con_sus_aluci">
                            <label for="con_sus_aluci">Consumo de Sustancias Alucinogenas <div class="obligatorio">*</div></label>
                            <b-form-textarea  tabindex="7" class="form-control focusNext" id="con_sus_aluci" name="con_sus_aluci"
                              v-model='formulario.con_sus_aluci' placeholder="Insert text" rows="3" no-resize>
                            </b-form-textarea>
                            <div id="con_sus_aluci-error" data-error-list> </div>
                          </div>

                          <!--<div class="form-group col-md-6" id="d-con_sus_aluci" >
                              <label for="con_sus_aluci">Consumo de Sustancias Alucinogenas <div class="obligatorio">*</div></label>
                              <input type="textarea" tabindex="7" class="form-control focusNext" id="con_sus_aluci" name="con_sus_aluci" v-model='formulario.con_sus_aluci'  placeholder="Insert text" />
                              <div id="con_sus_aluci-error" data-error-list> </div>
                          </div>-->

                          <div class="form-group col-md-6" id="d-con_bebidas_alco" >
                            <label for="con_bebidas_alco">Consumo de Bebidas Alcoholicas <div class="obligatorio">*</div></label>
                            <b-form-textarea  tabindex="7" class="form-control focusNext" id="con_bebidas_alco" name="con_bebidas_alco" v-model='formulario.con_bebidas_alco' placeholder="Insert text" rows="3" no-resize>
                            </b-form-textarea>
                            <div id="con_bebidas_alco-error" data-error-list> </div>
                          </div>

                          <!--<div class="form-group col-md-6" id="d-con_bebidas_alco" >
                              <label for="con_bebidas_alco">Consumo de Bebidas Alcoholicas <div class="obligatorio">*</div></label>
                              <input type="textarea" tabindex="7" class="form-control focusNext" id="con_bebidas_alco" name="con_bebidas_alco" v-model='formulario.con_bebidas_alco'  placeholder="Insert text" />
                              <div id="con_bebidas_alco-error" data-error-list> </div>
                          </div>-->

                          <div class="form-group col-md-6" id="d-p_emocionales" >
                            <label for="p_emocionales">Problemas Emocionales <div class="obligatorio">*</div></label>
                            <b-form-textarea  tabindex="7" class="form-control focusNext" id="p_emocionales" name="p_emocionales" v-model='formulario.p_emocionales' placeholder="Insert text" rows="3" no-resize>
                            </b-form-textarea>
                            <div id="p_emocionales-error" data-error-list> </div>
                          </div>

                          <!--<div class="form-group col-md-6" id="d-p_emocionales" >
                              <label for="p_emocionales">Problemas Emocionales <div class="obligatorio">*</div></label>
                              <input type="textarea" tabindex="7" class="form-control focusNext" id="p_emocionales" name="p_emocionales" v-model='formulario.p_emocionales'  placeholder="Insert text" />
                              <div id="p_emocionales-error" data-error-list> </div>
                          </div>-->

                          <div class="form-group col-md-6" id="d-p_familiares" >
                            <label for="p_familiares">Problemas Familiares <div class="obligatorio">*</div></label>
                            <b-form-textarea  tabindex="7" class="form-control focusNext" id="p_familiares" name="p_familiares"
                            v-model='formulario.p_familiares' placeholder="Insert text" rows="3" no-resize>
                            </b-form-textarea>
                            <div id="p_familiares-error" data-error-list> </div>
                          </div>

                          <!--<div class="form-group col-md-6" id="d-p_familiares" >
                              <label for="p_familiares">Problemas Familiares <div class="obligatorio">*</div></label>
                              <input type="textarea" tabindex="7" class="form-control focusNext" id="p_familiares" name="p_familiares" v-model='formulario.p_familiares'  placeholder="Insert text" />
                              <div id="p_familiares-error" data-error-list> </div>
                          </div>-->

                          <div class="form-group col-md-6" id="d-p_economico" >
                            <label for="p_economico">Problemas Economicos <div class="obligatorio">*</div></label>
                            <b-form-textarea  tabindex="7" class="form-control focusNext" id="p_economico" name="p_economico"
                            v-model='formulario.p_economico' placeholder="Insert text" rows="3" no-resize>
                            </b-form-textarea>
                            <div id="p_economico-error" data-error-list> </div>
                          </div>

                          <!--<div class="form-group col-md-6" id="d-p_economico" >
                              <label for="p_economico">Problemas Economicos <div class="obligatorio">*</div></label>
                              <input type="textarea" tabindex="7" class="form-control focusNext" id="p_economico" name="p_economico" v-model='formulario.p_economico'  placeholder="Insert text" />
                              <div id="p_economico-error" data-error-list> </div>
                          </div>-->

                          <div class="form-group col-md-6" id="d-p_academicos" >
                            <label for="p_academicos">Problemas Academicos <div class="obligatorio">*</div></label>
                            <b-form-textarea  tabindex="7" class="form-control focusNext" id="p_academicos" name="p_academicos"
                            v-model='formulario.p_academicos' placeholder="Insert text" rows="3" no-resize>
                            </b-form-textarea>
                            <div id="p_academicos-error" data-error-list> </div>
                          </div>

                          <!--<div class="form-group col-md-6" id="d-p_academicos" >
                              <label for="p_academicos">Problemas Academicos <div class="obligatorio">*</div></label>
                              <input type="textarea" tabindex="7" class="form-control focusNext" id="p_academicos" name="p_academicos" v-model='formulario.p_academicos'  placeholder="Insert text" />
                              <div id="p_academicos-error" data-error-list> </div>
                          </div>-->


                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-5" id="d-tutor_id_tutor">
                              <label for="tutor_id_tutor">Tutor <div class="obligatorio">*</div></label>
                              <select id='tutor_id_tutor' name="tutor_id_tutor" tabindex="4" class='form-control focusNext' v-model='formulario.tutor_id_tutor' >
                                <option value='' selected disabled >Seleccione</option>
                                <option v-for='data in tutores' :value='data.id_tutor'>{{ data.apellido_paterno+'  '+ data.apellido_materno+'  ,  '+data.nombres }}</option>
                              </select>
                              <div id="tutor_id_tutor-error" data-error-list> </div>
                          </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-9" style="text-align: right;">
                                <hr>
                                <div class="campo-obligatorio">* Campos requerido</div>
                                <div style="text-align: right;">
                                    <button tabindex="18"  type="submit" class="btn btn-primary mr-2 mb-2" id="save" >Grabar</button>
                                    <router-link to="/dashboard">
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
                estudiante:[],
                estudiantes:[],
                tutor:[],
                tutores:[],
                formulario:{
                    id_estudiante: '',
                    fecha: '',
                    p_salud : '',
                    h_alimentos: '',
                    con_sus_aluci : '',
                    con_bebidas_alco : '',
                    p_emocionales: '',
                    p_familiares : '',
                    p_economico : '',
                    p_academicos : '',
                    tutor_id_tutor : ''
                }
            }
        },
        methods:{
            getTutor: function(){
                axios.get('/combotutor')
                  .then(function (response) {
                     this.tutores = response.data;
                  }.bind(this));
            },
            getEstudiante: function(){
                axios.get('/comboestudiante')
                  .then(function (response) {
                     this.estudiantes = response.data;
                  }.bind(this));
            },

            Save:function(){
                ButtonProcessSave();
                axios.post('/diagnostico',this.formulario).then(respuesta => {
                        ButtonProcessSave();
                        if (respuesta.data.success = 'true')
                        {
                            toastr.success('Se ha creado correctamente el registro','Exito:');
                            // this.$router.go(-1);
                            this.$router.push({name: 'dashboard'});
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
            this.getTutor();
            this.getEstudiante();
            this.formulario.id_tutor = '';
            this.formulario.id_estudiante = '';
        }
    }
    function ErrorsForm(errors) {
        if (errors.response.data.errors.id_estudiante != null){
            $("#d-id_estudiante").addClass("has-danger");
            $("#id_estudiante").addClass("has-danger");
            $("#id_estudiante-error").addClass("form-control-error");
            $("#id_estudiante-error").html(errors.response.data.errors.id_estudiante);
        }
        else
        {
            $("#d-id_estudiante").removeClass("has-danger");
            $("#id_estudiante").removeClass("has-danger");
            $("#id_estudiante-error").removeClass("form-control-error");
            $("#id_estudiante-error").html("");
        }

        if (errors.response.data.errors.fecha != null){
            $("#d-fecha").addClass("has-danger");
            $("#fecha").addClass("has-danger");
            $("#fecha-error").addClass("form-control-error");
            $("#fecha-error").html(errors.response.data.errors.fecha);
        }
        else
        {
            $("#d-fecha").removeClass("has-danger");
            $("#fecha").removeClass("has-danger");
            $("#fecha-error").removeClass("form-control-error");
            $("#fecha-error").html("");
        }

        if (errors.response.data.errors.p_salud != null){
            $("#d-p_salud").addClass("has-danger");
            $("#p_salud").addClass("has-danger");
            $("#p_salud-error").addClass("form-control-error");
            $("#p_salud-error").html(errors.response.data.errors.p_salud);
        }
        else
        {
            $("#d-p_salud").removeClass("has-danger");
            $("#p_salud").removeClass("has-danger");
            $("#p_salud-error").removeClass("form-control-error");
            $("#p_salud-error").html("");
        }


        if (errors.response.data.errors.h_alimentos != null){
            $("#d-h_alimentos").addClass("has-danger");
            $("#h_alimentos").addClass("has-danger");
            $("#h_alimentos-error").addClass("form-control-error");
            $("#h_alimentos-error").html(errors.response.data.errors.h_alimentos);
        }
        else
        {
            $("#d-h_alimentos").removeClass("has-danger");
            $("#h_alimentos").removeClass("has-danger");
            $("#h_alimentos-error").removeClass("form-control-error");
            $("#h_alimentos-error").html("");
        }

        if (errors.response.data.errors.con_sus_aluci != null){
            $("#d-con_sus_aluci").addClass("has-danger");
            $("#con_sus_aluci").addClass("has-danger");
            $("#con_sus_aluci-error").addClass("form-control-error");
            $("#con_sus_aluci-error").html(errors.response.data.errors.con_sus_aluci);
        }
        else
        {
            $("#d-con_sus_aluci").removeClass("has-danger");
            $("#con_sus_aluci").removeClass("has-danger");
            $("#con_sus_aluci-error").removeClass("form-control-error");
            $("#con_sus_aluci-error").html("");
        }


        if (errors.response.data.errors.con_bebidas_alco != null){
            $("#d-con_bebidas_alco").addClass("has-danger");
            $("#con_bebidas_alco").addClass("has-danger");
            $("#con_bebidas_alco-error").addClass("form-control-error");
            $("#con_bebidas_alco-error").html(errors.response.data.errors.con_bebidas_alco);
        }
        else
        {
            $("#d-con_bebidas_alco").removeClass("has-danger");
            $("#con_bebidas_alco").removeClass("has-danger");
            $("#con_bebidas_alco-error").removeClass("form-control-error");
            $("#con_bebidas_alco-error").html("");
        }

        if (errors.response.data.errors.p_emocionales != null){
            $("#d-p_emocionales").addClass("has-danger");
            $("#p_emocionales").addClass("has-danger");
            $("#p_emocionales-error").addClass("form-control-error");
            $("#p_emocionales-error").html(errors.response.data.errors.p_emocionales);
        }
        else
        {
            $("#d-p_emocionales").removeClass("has-danger");
            $("#p_emocionales").removeClass("has-danger");
            $("#p_emocionales-error").removeClass("form-control-error");
            $("#p_emocionales-error").html("");
        }

        if (errors.response.data.errors.p_familiares != null){
            $("#d-p_familiares").addClass("has-danger");
            $("#p_familiares").addClass("has-danger");
            $("#p_familiares-error").addClass("form-control-error");
            $("#p_familiares-error").html(errors.response.data.errors.p_familiares);
        }
        else
        {
            $("#d-p_familiares").removeClass("has-danger");
            $("#p_familiares").removeClass("has-danger");
            $("#p_familiares-error").removeClass("form-control-error");
            $("#p_familiares-error").html("");
        }

        if (errors.response.data.errors.p_economico != null){
            $("#d-p_economico").addClass("has-danger");
            $("#p_economico").addClass("has-danger");
            $("#p_economico-error").addClass("form-control-error");
            $("#p_economico-error").html(errors.response.data.errors.p_economico);
        }
        else
        {
            $("#d-p_economico").removeClass("has-danger");
            $("#p_economico").removeClass("has-danger");
            $("#p_economico-error").removeClass("form-control-error");
            $("#p_economico-error").html("");
        }

        if (errors.response.data.errors.p_academicos != null){
            $("#d-p_academicos").addClass("has-danger");
            $("#p_academicos").addClass("has-danger");
            $("#p_academicos-error").addClass("form-control-error");
            $("#p_academicos-error").html(errors.response.data.errors.p_academicos);
        }
        else
        {
            $("#d-p_academicos").removeClass("has-danger");
            $("#p_academicos").removeClass("has-danger");
            $("#p_academicos-error").removeClass("form-control-error");
            $("#p_academicos-error").html("");
        }

        if (errors.response.data.errors.tutor_id_tutor != null){
            $("#d-tutor_id_tutor").addClass("has-danger");
            $("#tutor_id_tutor").addClass("has-danger");
            $("#tutor_id_tutor-error").addClass("form-control-error");
            $("#tutor_id_tutor-error").html(errors.response.data.errors.tutor_id_tutor);
        }
        else
        {
            $("#d-tutor_id_tutor").removeClass("has-danger");
            $("#tutor_id_tutor").removeClass("has-danger");
            $("#tutor_id_tutor-error").removeClass("form-control-error");
            $("#tutor_id_tutor-error").html("");
        }

    }
    function ButtonProcessSave() {
      $('#save').attr('disabled', 'disabled');
      $('#save').addClass("btn btn-primary mr-2 mb-2");
      $('#save').html("<img src='zamar/loading.svg'> Grabar");
    }
    function ButtonNormalSave () {
        $('#save').addClass("btn btn-primary mr-2 mb-2");
        $('#save').attr('disabled', false);
        $('#save').html("Grabar");
    }
    document.addEventListener('keypress', function(evt){
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
