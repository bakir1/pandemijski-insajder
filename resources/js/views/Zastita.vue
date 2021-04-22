<template>
  <div class="container-fluid">
    <h1 class="mt-4">Zaštita</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">
          <router-link to="/">Početna</router-link>
      </li>
      <li class="breadcrumb-item active">Zaštita</li>
    </ol>

    <div class="row">
      <div class="col-xl-6">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-gavel"></i>
            Mjere info
          </div>
          <div class="card-body">
              <table class="table">
                  <thead>
                      <tr>
                          <td>ID</td>
                          <td>Name</td>
                          <td>Image</td>
                          <td>Action</td>
                      </tr>
                  </thead>
              </table>
         </div>
        </div>
      </div>     
    </div>
  </div>
</template>