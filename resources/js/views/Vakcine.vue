<template>
  <div class="container-fluid">
    <h1 class="mt-4">Vakcine</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">
        <router-link to="/">Početna</router-link>
      </li>
      <li class="breadcrumb-item active">Vakcine</li>
    </ol>
    <div class="row">
      <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body">Primary Card</div>
          <div
            class="card-footer d-flex align-items-center justify-content-between"
          >
            <a class="small text-white stretched-link" href="#">View Details</a>
            <div class="small text-white">
              <i class="fas fa-angle-right"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
          <div class="card-body">Warning Card</div>
          <div
            class="card-footer d-flex align-items-center justify-content-between"
          >
            <a class="small text-white stretched-link" href="#">View Details</a>
            <div class="small text-white">
              <i class="fas fa-angle-right"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
          <div class="card-body">Success Card</div>
          <div
            class="card-footer d-flex align-items-center justify-content-between"
          >
            <a class="small text-white stretched-link" href="#">View Details</a>
            <div class="small text-white">
              <i class="fas fa-angle-right"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
          <div class="card-body">Danger Card</div>
          <div
            class="card-footer d-flex align-items-center justify-content-between"
          >
            <a class="small text-white stretched-link" href="#">View Details</a>
            <div class="small text-white">
              <i class="fas fa-angle-right"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6">
          <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-check-double"></i>
              Vakcine info
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <td>ID</td>
                    <td>Ime Vakcine</td>
                    <td>Količina</td>
                    <td>Efikasnost</td>
                    <td>Porijeklo</td>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  
 <!-- $table->id();
            $table->string('ime');
            $table->integer('kolicina');
            $table->float('efikasnost');
            $table->text('porijeklo');
            $table->timestamps(); -->

  </div>
</template>

<script>
export default {
  name: 'vakcine',
  data() {
        return {
          vakcineData: {
            name: '',
            image: ''
          }
        }
  },
}
</script>