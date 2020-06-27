<template>

  <div class="air__layout__content">
      <div class="air__utils__content">
        <!-- Breadcrumb -->
        <div class="row">
          <div class="col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> <router-link to="/" > Panel de Control </router-link></a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Sucursal</a></li>
                <li class="breadcrumb-item active" aria-current="page">Relación de sucursales</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="air__utils__heading">
        <h3>
            <span class="mr-3"> Sucursal</span>
            <router-link to="/createsucursal">
              <a href="#"  target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Nueva Sucursal</a>
             </router-link>

        </h3>
        </div>

        <div class="card">
          <div class="card-body">
            <h4 class="mb-4">
              <strong>Relación de sucursales</strong>
            </h4>
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-5" >
                  <spinner-component v-show='loading'></spinner-component>
                  <table class="table table-hover nowrap" id="datable" >
                    <thead>
                      <tr>
                        <th style="text-align: center;">#</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                         <th>Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for ="(sucursal, numero) in data">
                        <td><center> {{ numero +1  }} </center></td>
                        <td>{{ sucursal.nombre }}</td>
                        <td>{{ sucursal.direccion }}</td>
                        <td>
                          <router-link :to="{name: 'editsucursal', params: {id: sucursal.id_sucursal }}">
                              <span class="badge badge-secondary">Editar</span>
                          </router-link>
                          <span class="badge badge-danger" v-on:click.capture='Delete(sucursal.id_sucursal,sucursal.nombre)' style="cursor: pointer;">Eliminar</span>
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
          this.getInstitucion()
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
        getInstitucion(){
            var urlSucursal = "sucursal";
            axios.get(urlSucursal).then(response=>{
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
                    axios.delete('/sucursal/'+id).then(respuesta => {
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
                        self.getInstitucion();
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
