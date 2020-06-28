<template>
  <div class="air__layout air__layout--hasSider">
     <div class="air__menuLeft">
      <div class="air__menuLeft__outer">
          <div class="air__menuLeft__mobileToggleButton air__menuLeft__mobileActionToggle">
            <span></span>
          </div>
          <div class="air__menuLeft__toggleButton air__menuLeft__actionToggle">
            <span></span>
            <span></span>
          </div>
          <a href="javascript: void(0);" class="air__menuLeft__logo">
            <img src="/zamar/images/logo-santarosa.png" alt="IESP Santa Rosa de Lima" />
            <div class="air__menuLeft__logo__name">IESP</div>
            <div class="air__menuLeft__logo__descr">Santa Rosa de Lima</div>
          </a>
          <a href="javascript: void(0);" class="air__menuLeft__user">
            <div class="air__menuLeft__user__avatar">
              <img src="/zamar/estudiantes/foto/juanperez.png" alt="Juan Perez" />
            </div>
            <div class="air__menuLeft__user__name">
              Juan Perez
            </div>
            <div class="air__menuLeft__user__role">
              Administrator
            </div>
          </a>
          <!-- Menu -->
          <div class="air__menuLeft__container air__customScroll" >
            <ul class="air__menuLeft__list">
              <li class="air__menuLeft__category">
                <span>Escritorio</span>
              </li>
              <li class="air__menuLeft__item">
                <a href="#" class="air__menuLeft__link air__sidebar__actionToggle">
                  <i class="fe fe-settings air__menuLeft__icon"></i>
                  <span><router-link :to="{name: 'dashboard'}">Panel de Control</router-link></span>
                </a>
              </li>
              <li class="air__menuLeft__category">
                <span>Ecosistema Educativo</span>
              </li>
              <li class="air__menuLeft__item air__menuLeft__submenu">
                <a href="#" class="air__menuLeft__link">
                  <i class="fe fe-home air__menuLeft__icon"></i>
                  <span>Institución</span>
                </a>
                <ul class="air__menuLeft__list">
                  <li class="air__menuLeft__item">
                    <a href="#" class="air__menuLeft__link">
                      <router-link :to="{name: 'institucion'}">Institución</router-link>
                    </a>
                  </li>
                  <li class="air__menuLeft__item">
                    <a href="#" class="air__menuLeft__link">
                      <router-link :to="{name: 'sucursal'}">Sucursal</router-link>
                    </a>
                  </li>
                </ul>
              </li>
               <!-- Modulo Estudiante -->
              <li class="air__menuLeft__item air__menuLeft__submenu" >
                <a href="javascript: void(0)" class="air__menuLeft__link">
                  <i class="fe fe-user air__menuLeft__icon"></i>
                  <span>Estudiante</span>
                </a>
                <ul class="air__menuLeft__list" >
                    <li class="air__menuLeft__item">
                      <a href="#" class="air__menuLeft__link">
                        <router-link :to="{name: 'alumnofamiliar'}">Estudiante</router-link>
                      </a>
                    </li>
                  <li class="air__menuLeft__item" style="width: 190px;">
                    <a href="#" class="air__menuLeft__link">
                      <span>Actualizacion Datos</span>
                    </a>
                  </li>
                   <li class="air__menuLeft__item" style="width: 170px;">
                    <a href="#" class="air__menuLeft__link">
                      <span>Familia</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- Modulo Diagnostico -->
               <li class="air__menuLeft__item air__menuLeft__submenu">
                 <a href="javascript: void(0)" class="air__menuLeft__link">
                   <i class="fa fa-wpforms air__menuLeft__icon"></i>
                   <span>Diagnostico</span>
                 </a>
                 <ul class="air__menuLeft__list">
                   <li class="air__menuLeft__item">
                     <a href="#" class="air__menuLeft__link">
                       <router-link :to="{name: 'creatediagnostico'}">Asignar Tutoria</router-link>
                     </a>
                   </li>

                 </ul>
               </li>

              <!-- Modulo Tutoria Individual -->
               <li class="air__menuLeft__item air__menuLeft__submenu">
                 <a href="javascript: void(0)" class="air__menuLeft__link">
                   <i class="fe fe-user air__menuLeft__icon"></i>
                   <span>Tutoria Individual</span>
                 </a>
                 <ul class="air__menuLeft__list">
                   <li class="air__menuLeft__item">
                     <a href="#" class="air__menuLeft__link">
                       <span>Crear Tutoria</span>
                     </a>
                   </li>
                   <li class="air__menuLeft__item">
                     <a href="#" class="air__menuLeft__link">
                       <span>Seguimiento</span>
                     </a>
                   </li>
                    <li class="air__menuLeft__item">
                     <a href="#" class="air__menuLeft__link">
                       <span>Reporte</span>
                     </a>
                   </li>
                 </ul>
               </li>



               <!--  Modulo General -->
              <li class="air__menuLeft__item air__menuLeft__submenu">
                <a href="javascript: void(0)" class="air__menuLeft__link">
                  <i class="fe fe-layers air__menuLeft__icon"></i>
                  <span>General</span>
                </a>
                <ul class="air__menuLeft__list">
                  <li class="air__menuLeft__item">
                    <a href="#" class="air__menuLeft__link">
                      <span>Documento</span>
                    </a>
                  </li>
                  <li class="air__menuLeft__item">
                    <a href="#" class="air__menuLeft__link">
                      <span>Ocupación</span>
                    </a>
                  </li>
                  <li class="air__menuLeft__item">
                    <a href="#" class="air__menuLeft__link">
                      <span>Género</span>
                    </a>
                  </li>
                  <li class="air__menuLeft__item">
                    <a href="#" class="air__menuLeft__link">
                      <span>Estado Civil</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
      </div>
    </div>
    <div class="air__menuLeft__backdrop air__menuLeft__mobileActionToggle"></div>

    <div class="air__layout">
         <!-- Información Top -->
        <div class="air__layout__header" >
          <top-component></top-component>
         </div>
         <!-- Información Top -->
        <div class="air__layout__content">
          <div class="air__utils__content">
              <router-view></router-view>
         </div>
       </div>
         <!-- Información Footer-->
        <div class="air__layout__footer" >
          <footer-component></footer-component>
        </div>
    </div>
  </div>
</template>
