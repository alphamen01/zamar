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
                <li class="breadcrumb-item active" aria-current="page">Detalle Estudiante</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="air__utils__heading">
        <h3>
            <span class="mr-3">Estudiante</span>
        </h3>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-5" >

                    <spinner-component v-show='loading'></spinner-component>

                    <div class="card" style="padding-left: 12px; padding-right: 12px;">
                          <h4 class="card-header mb-4">Datos Personales</h4>
                          <div class="form-row" >
                            <b-form-group class="col-md-4" label="Apellidos:" label-for="input-1">
                               <b-form-input id="input-1" v-model="data.apellidos" disabled></b-form-input>
                             </b-form-group>

                            <b-form-group class="col-md-4" label="Nombres:" label-for="input-2">
                               <b-form-input id="input-2" v-model="data.nombres" disabled></b-form-input>
                             </b-form-group>

                             <b-form-group class="col-md-4" label="DNI:" label-for="input-3">
                                <b-form-input id="input-3" v-model="data.dni" disabled></b-form-input>
                              </b-form-group>

                              <b-form-group class="col-md-3" label="Carnet Universitario:" label-for="input-4">
                                 <b-form-input id="input-4" v-model="data.carne_universitario" disabled></b-form-input>
                               </b-form-group>

                               <!--<b-form-group class="col-md-4" label="Fecha Nacimiento:" label-for="input-5">
                                  <b-form-input id="input-5" v-model="data.fecha_nacimiento" disabled></b-form-input>
                                </b-form-group>-->

                                <div class="col-md-4">
                                  <label for="example-datepicker">Fecha Nacimiento:</label>
                                  <b-form-datepicker id="example-datepicker" v-model="data.fecha_nacimiento" class="mb-2" disabled></b-form-datepicker>
                                </div>

                                <b-form-group class="col-md-3" label="Lugar Nacimiento:" label-for="input-6">
                                   <b-form-input id="input-6" v-model="data.lugar_nacimiento" disabled></b-form-input>
                                 </b-form-group>

                                 <b-form-group class="col-md-2" label="Genero:" label-for="input-7">
                                    <b-form-input id="input-7" v-model="data.genero" disabled></b-form-input>
                                  </b-form-group>

                                  <b-form-group class="col-md-4" label="Departamento:" label-for="input-8">
                                     <b-form-input id="input-8" v-model="data.departamento" disabled></b-form-input>
                                   </b-form-group>

                                   <b-form-group class="col-md-4" label="Provincia:" label-for="input-9">
                                      <b-form-input id="input-9" v-model="data.provincia" disabled></b-form-input>
                                    </b-form-group>

                                    <b-form-group class="col-md-4" label="Distrito:" label-for="input-10">
                                       <b-form-input id="input-10" v-model="data.distrito" disabled></b-form-input>
                                     </b-form-group>

                                     <b-form-group class="col-md-5" label="Direccion:" label-for="input-11">
                                        <b-form-input id="input-11" v-model="data.direccion" disabled></b-form-input>
                                      </b-form-group>
                                      <b-form-group class="col-md-7" label="Referencia:" label-for="input-12">
                                         <b-form-input id="input-12" v-model="data.referencia" disabled></b-form-input>
                                       </b-form-group>


                          </div>




                    </div>

                    <div class="card" style="padding-left: 12px; padding-right: 12px;">
                          <h4 class="card-header mb-4">Datos Academicos</h4>
                          <div class="form-row" >
                            <b-form-group class="col-md-5" label="Facultad:" label-for="input-13">
                               <b-form-input id="input-13" v-model="data.facultad" disabled></b-form-input>
                             </b-form-group>

                             <b-form-group class="col-md-5" label="Escuela:" label-for="input-14">
                                <b-form-input id="input-14" v-model="data.escuela" disabled></b-form-input>
                              </b-form-group>

                              <b-form-group class="col-md-2" label="Ciclo:" label-for="input-15">
                                 <b-form-input id="input-15" v-model="data.ciclo" disabled></b-form-input>
                               </b-form-group>

                               <b-form-group class="col-md-4" label="Modalidad de ingreso:" label-for="input-16">
                                  <b-form-input id="input-16" v-model="data.modalidad_ingreso" disabled></b-form-input>
                                </b-form-group>

                                <b-form-group class="col-md-4" label="Semestre:" label-for="input-17">
                                   <b-form-input id="input-17" v-model="data.semestre" disabled></b-form-input>
                                 </b-form-group>

                          </div>




                    </div>

                    <div class="card" style="padding-left: 12px; padding-right: 12px;">
                          <h4 class="card-header mb-4">Datos Familiares</h4>
                          <div class="form-row" >
                            <b-form-group class="col-md-3" label="Nivel Instruccion Padre:" label-for="input-18">
                               <b-form-input id="input-18" v-model="data.instruccion" disabled></b-form-input>
                             </b-form-group>

                             <b-form-group class="col-md-3" label="Ocupación Padre:" label-for="input-19">
                                <b-form-input id="input-19" v-model="data.ocupacion" disabled></b-form-input>
                              </b-form-group>

                              <b-form-group class="col-md-3" label="Vivienda:" label-for="input-20">
                                 <b-form-input id="input-20" v-model="data.vivienda" disabled></b-form-input>
                               </b-form-group>

                               <b-form-group class="col-md-3" label="Nro Personas Vive:" label-for="input-21">
                                  <b-form-input id="input-21" v-model="data.personas_vive" disabled></b-form-input>
                                </b-form-group>

                                <b-form-group class="col-md-3" label="Con quien vive:" label-for="input-22">
                                   <b-form-input id="input-22" v-model="data.conquien_vive" disabled></b-form-input>
                                 </b-form-group>

                                 <b-form-group class="col-md-3" label="Labora / Trabaja:" label-for="input-23">
                                    <b-form-input id="input-23" v-model="data.labora" disabled></b-form-input>
                                  </b-form-group>

                                  <b-form-group class="col-md-3" label="Depende económicamente:" label-for="input-24">
                                     <b-form-input id="input-24" v-model="data.dependencia" disabled></b-form-input>
                                   </b-form-group>

                                   <b-form-group class="col-md-3" label="Quien Financias sus estudios:" label-for="input-25">
                                       <b-form-input id="input-25" v-model="data.financia" disabled></b-form-input>
                                    </b-form-group>

                                    <b-form-group class="col-md-4" label="Alguien depende económicamente de ud:" label-for="input-26">
                                       <b-form-input id="input-26" v-model="data.depedencia_ud" disabled></b-form-input>
                                     </b-form-group>

                          </div>


                    </div>

                    <div class="card" style="padding-left: 12px; padding-right: 12px;">
                          <h4 class="card-header mb-4">Contacto</h4>
                          <div class="form-row" >
                            <b-form-group class="col-md-3" label="Celular:" label-for="input-27">
                               <b-form-input id="input-27" v-model="data.movil" disabled></b-form-input>
                             </b-form-group>

                             <b-form-group class="col-md-3" label="Teléfono Fijo:" label-for="input-28">
                                <b-form-input id="input-28" v-model="data.telefono_fijo" disabled></b-form-input>
                              </b-form-group>

                              <b-form-group class="col-md-3" label="Email Personal:" label-for="input-29">
                                 <b-form-input id="input-29" v-model="data.email" disabled></b-form-input>
                               </b-form-group>

                               <b-form-group class="col-md-3" label="Email Institucion:" label-for="input-30">
                                  <b-form-input id="input-30" v-model="data.email_institucion" disabled></b-form-input>
                                </b-form-group>


                          </div>


                    </div>

                    <div class="card" style="padding-left: 12px; padding-right: 12px;">
                          <h4 class="card-header mb-4">Redes Sociales</h4>
                          <div class="form-row" >
                            <b-form-group class="col-md-4" label="Facebook:" label-for="input-31">
                               <b-form-input id="input-31" v-model="data.facebook" disabled></b-form-input>
                             </b-form-group>

                             <b-form-group class="col-md-4" label="Twitter:" label-for="input-32">
                                <b-form-input id="input-32" v-model="data.twitter" disabled></b-form-input>
                              </b-form-group>

                              <b-form-group class="col-md-4" label="Instagram:" label-for="input-33">
                                 <b-form-input id="input-33" v-model="data.instagram" disabled></b-form-input>
                               </b-form-group>


                          </div>


                    </div>

                    <div class="card" style="padding-left: 12px; padding-right: 12px;">
                          <h4 class="card-header mb-4">Tutoria</h4>
                          <div class="form-row" >
                            <b-form-group class="col-md-4" label="¿Desea Recibir Tutoria?:" label-for="input-34">
                               <b-form-input id="input-34" v-model="data.tutoria" disabled></b-form-input>
                             </b-form-group>


                          </div>


                    </div>

                  
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

      mounted(){
          this.getAlumnoFamiliar()
      },
     data(){
        return{
           data:[],
           loading: true
        }
     },

     methods:{

        getAlumnoFamiliar(){
            var urlAlumnoFamiliar = 'alumnofamiliar/'+ this.$route.params.id;
            axios.get(urlAlumnoFamiliar).then(response=>{
              this.data = response.data;
              this.loading = false;
            });
        },

    },
  }

</script>
