<template>

  <div class="air__layout__content">
      <div class="air__utils__content">
        <!-- Breadcrumb -->
        <div class="row">
          <div class="col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> <router-link to="/" > Panel de Control </router-link></a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Estudiante</a></li>
                <li class="breadcrumb-item active" aria-current="page">Relación de Estudiantes</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="air__utils__heading">
        <h3>
            <span class="mr-3"> Estudiante</span>
            

        </h3>
        </div>

        <div class="card">
          <div class="card-body">
            <h4 class="mb-4">
              <strong>Relación de Estudiantes con datos actualizados</strong>
            </h4>
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-5" >
                  <spinner-component v-show='loading'></spinner-component>
                  <table class="table table-hover nowrap" id="datable" >
                    <thead>
                      <tr>
                        <th style="text-align: center;">#</th>
                        <th>Apellidos</th>
                        <th>Nombres</th>
                        <th style="text-align: center;">Facultad</th>
                         <th>Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for ="alumnofamiliar in data">
                        <td><center> {{ alumnofamiliar.id_alumno_familiar  }} </center></td>
                        <td>{{ alumnofamiliar.apellidos }}</td>
                        <td>{{ alumnofamiliar.nombres }}</td>
                        <td><center>{{ alumnofamiliar.facultad }}</center></td>
                        <td>
                          <router-link :to="{name: 'detailalumnofamiliar', params: {id: alumnofamiliar.id_alumno_familiar }}">
                              <span class="badge badge-secondary">Detalle</span>
                          </router-link>
                          <!--<router-link :to="{name: 'editsucursal', params: {id: sucursal.id_sucursal }}">
                              <span class="badge badge-secondary">Editar</span>
                          </router-link>
                          <span class="badge badge-danger" v-on:click.capture='Delete(sucursal.id_sucursal,sucursal.nombre)' style="cursor: pointer;">Eliminar</span>-->
                          </td>
                      </tr>

                    </tbody>

                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

</template>

<script>
  import datatable  from 'datatables'
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
        mytable(){
             $(function() {
             $('#datable').DataTable({
                 lengthChange: false,
                 scrollCollapse: true,
                 bSort: false,
                 autoWidth: false,
                  "oLanguage": {
                          'sSearch':    'Buscar: ',
                          'sLengthMenu': 'Mostrar _MENU_ ',
                          'sInfo':          'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
                          'sZeroRecords': "<p style='text-align:center'>No se encontraron registros ...</p>",
                          'sLoadingRecords': 'Cargando...',
                          'sProcessing':    'Procesando...',
                          'sInfoEmpty': 'Mostrando 0 a 0 de 0 Registros', 'sInfoFiltered': '(Filtrado desde _MAX_ Total registros)',
                          'bAutoWidth': true,
                          'oPaginate':
                          {
                              'sNext': 'próximo',
                              'sLast': 'primero',
                              'sFirst': 'último',
                              'sPrevious': 'anterior'
                          }
                  },
                 iDisplayLength: 5
             });
           });
        },
        getAlumnoFamiliar(){
            var urlAlumnoFamiliar = "alumnofamiliar";
            axios.get(urlAlumnoFamiliar).then(response=>{
              this.data = response.data;
              this.loading = false;
              this.mytable()
            });
        },
      Delete(id,name){

            var self = this;

            swal({
              title: '¿Desea eliminar este registro?',
              text: name,
              type: 'error',
              showCancelButton: true,
              cancelButtonClass: 'btn-secondary mr-2 mb-2',
              confirmButtonClass: 'btn-danger mr-2 mb-2',
              confirmButtonText: 'Si, eliminar!',
              cancelButtonText: 'Cancelar'
            },
            function(isConfirm) {
                if (isConfirm) {
                    axios.delete('/alumnofamiliar/'+id).then(respuesta => {
                    if (respuesta.data.success == 'true')
                    {
                        swal({
                          title: 'Eliminado!',
                          text: 'El registro ha sido eliminado',
                          type: 'success',
                          confirmButtonClass: 'btn-success',
                          confirmButtonText: 'Aceptar',
                        });
                        // this.data.splice(this.data.indexOf(id), 1);
                        $('#datable').DataTable().clear();
                        $('#datable').DataTable().destroy();
                        self.loading = true;
                        self.data= [];
                        self.getAlumnoFamiliar();
                    }
                })
                .catch(error => {
                    if (error.response.status == 422) //Error Formularios
                    {
                         toastr.error('Error en la base de datos','Error:');
                    }
                    if (error.response.status == 500) //Error: del servidor interno
                    {
                        toastr.error(error.response.data.message ,'Error:');
                    }
                    if (error.response.status == 503) //Servicio no disponible
                    {
                        toastr.error(error.response.data.message ,'Error:');
                    }
                })
                }
            });
      }
    },
  }

</script>
