import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);
export default new VueRouter({
    routes: [
        {   //Dashboard
            path: '/',
            name: 'dashboard',
            component: require('./views/Dashboard.vue').default
        },
        {  //Modulo Institucion
            path: '/institucion',
            name: 'institucion',
            component: require('./views/institucion/IndexView.vue').default
        },
        {
            path: '/createinstitucion',
            name: 'createinstitucion',
            component: require('./views/institucion/CreateView.vue').default
        },
        {
            path: '/editinstitucion/:id/edit',
            name: 'editinstitucion',
            component: require('./views/institucion/EditView.vue').default
        },
        {  //Modulo Sucursal
            path: '/sucursal',
            name: 'sucursal',
            component: require('./views/sucursal/IndexView.vue').default
        },
        {
            path: '/createsucursal',
            name: 'createsucursal',
            component: require('./views/sucursal/CreateView.vue').default
        },
        {
            path: '/editsucursal/:id/edit',
            name: 'editsucursal',
            component: require('./views/sucursal/EditView.vue').default
        },
        {  //Modulo Sucursal
            path: '/creatediagnostico',
            name: 'creatediagnostico',
            component: require('./views/diagnostico/CreateView.vue').default
        },

        {  //Modulo AlumnoFamiliar
            path: '/alumnofamiliar',
            name: 'alumnofamiliar',
            component: require('./views/alumnofamiliar/IndexView.vue').default
        },
        {
            path: '/alumnofamiliar/:id',
            name: 'detailalumnofamiliar',
            component: require('./views/alumnofamiliar/DetailView.vue').default
        },

    ]
});
