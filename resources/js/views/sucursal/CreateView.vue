<template>
    <div class="air__layout__content">
      <div class="air__utils__content">
        <!-- Breadcrumb -->
        <div class="row">
          <div class="col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><router-link to="/" > Panel de Control </router-link> </a></li>
                <li class="breadcrumb-item"><a href="#"><router-link to="/institucion"> Relación de sucursales </router-link> </a></li>
                <li class="breadcrumb-item active" aria-current="page">Crear sucursal</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="air__utils__heading">
        <h3>
            <span class="mr-3">Crear sucursal</span>
        </h3>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-5" >
                    <h4 class="mb-4">
                        <strong>Datos de la sucursal</strong>
                    </h4>
                    <form @submit.prevent="Save">
                        <div class="form-row">
                            <div class="form-group col-md-5" id="d-id_institucion">
                                <label for="id_institucion">Institucion <div class="obligatorio">*</div></label>
                                <select id='id_institucion' name="id_institucion" tabindex="4" class='form-control focusNext' v-model='formulario.id_institucion' >
                                  <option value='' selected disabled >Seleccione</option>
                                  <option v-for='data in instituciones' :value='data.id_institucion'>{{ data.nombre_ies }}</option>
                                </select>
                                <div id="id_institucion-error" data-error-list> </div>
                            </div>
                            <div class="form-group col-md-4" id="d-nombre">
                                    <label for="nombre">Nombre <div class="obligatorio">*</div></label>
                                    <input type="text" tabindex="1" class="form-control focusNext" v-model='formulario.nombre' id="nombre" name ='nombre' placeholder="Nombre" />
                                    <div id="nombre-error" data-error-list> </div>
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
                            <div class="form-group col-md-6" id="d-direccion" >
                                <label for="direccion">Dirección <div class="obligatorio">*</div></label>
                                <input type="textarea" tabindex="7" class="form-control focusNext" id="direccion" name="direccion" v-model='formulario.direccion'  placeholder="Dirección" />
                                <div id="direccion-error" data-error-list> </div>
                            </div>

                            <div class="form-group col-md-3" id="d-telefono">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" tabindex="9" class="form-control focusNext" id="telefono" name="telefono"  v-model='formulario.telefono'  placeholder="Teléfono" />
                                    <div id="telefono-error" data-error-list> </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5" id="d-sitio_web">
                                <label for="sitio_web">Sitio web </label>
                                <input type="textarea" tabindex="8" class="form-control focusNext" id="sitio_web" name="sitio_web" v-model='formulario.sitio_web'  placeholder="Sitio web" />
                                <div id="sitio_web-error" data-error-list> </div>
                            </div>
                            <div class="form-group col-md-4" id="d-email">
                                <label for="email">Email <div class="obligatorio">*</div></label>
                                <input type="text"  tabindex="11" class="form-control focusNext" id="email" name="email" v-model='formulario.email'  placeholder="Email" />
                                <div id="email-error" data-error-list> </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-9" style="text-align: right;">
                                <hr>
                                <div class="campo-obligatorio">* Campos requerido</div>
                                <div style="text-align: right;">
                                    <button tabindex="18"  type="submit" class="btn btn-primary mr-2 mb-2" id="save" >Grabar Sucursal</button>
                                    <router-link to="/sucursal">
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
                instituciones:[],
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
            getInstitucion: function(){
                axios.get('/comboinstitucion')
                  .then(function (response) {
                     this.instituciones = response.data;
                  }.bind(this));
            },
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
                axios.post('/sucursal',this.formulario).then(respuesta => {
                        ButtonProcessSave();
                        if (respuesta.data.success = 'true')
                        {
                            toastr.success('Se ha creado correctamente el registro','Exito:');
                            // this.$router.go(-1);
                            this.$router.push({name: 'sucursal'});
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
            this.getInstitucion();
            this.formulario.id_institucion = '';
            this.formulario.id_departamento = '';
            this.formulario.id_provincia = '';
            this.formulario.id_distrito = '';
        }
    }
    function ErrorsForm(errors) {
        if (errors.response.data.errors.id_institucion != null){
            $("#d-id_institucion").addClass("has-danger");
            $("#id_institucion").addClass("has-danger");
            $("#id_institucion-error").addClass("form-control-error");
            $("#id_institucion-error").html(errors.response.data.errors.id_institucion);
        }
        else
        {
            $("#d-id_institucion").removeClass("has-danger");
            $("#id_institucion").removeClass("has-danger");
            $("#id_institucion-error").removeClass("form-control-error");
            $("#id_institucion-error").html("");
        }

        if (errors.response.data.errors.nombre != null){
            $("#d-nombre").addClass("has-danger");
            $("#nombre").addClass("has-danger");
            $("#nombre-error").addClass("form-control-error");
            $("#nombre-error").html(errors.response.data.errors.nombre);
        }
        else
        {
            $("#d-nombre").removeClass("has-danger");
            $("#nombre").removeClass("has-danger");
            $("#nombre-error").removeClass("form-control-error");
            $("#nombre-error").html("");
        }

        if (errors.response.data.errors.direccion != null){
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

        if (errors.response.data.errors.id_departamento != null){
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

        if (errors.response.data.errors.id_provincia != null){
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

        if (errors.response.data.errors.id_distrito != null){
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

        if (errors.response.data.errors.telefono != null){
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

        if (errors.response.data.errors.telefono != null){
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


        if (errors.response.data.errors.email != null){
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

        if (errors.response.data.errors.sitio_web != null){
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

    }
    function ButtonProcessSave() {
      $('#save').attr('disabled', 'disabled');
      $('#save').addClass("btn btn-primary mr-2 mb-2");
      $('#save').html("<img src='zamar/loading.svg'> Grabar Sucursal");
    }
    function ButtonNormalSave () {
        $('#save').addClass("btn btn-primary mr-2 mb-2");
        $('#save').attr('disabled', false);
        $('#save').html("Grabar Sucursal");
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
