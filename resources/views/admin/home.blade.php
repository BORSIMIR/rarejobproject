@include('admin.header')

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        @include('admin.sidebar')

        <!-- Layout container -->
        <div class="layout-page">
          
          @include('admin.navbar')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            
            @include('admin.home-body')

            

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

@include('admin.footer')
