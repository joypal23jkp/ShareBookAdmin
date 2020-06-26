<template>
    <div class="auth-parent">

       <div class="auth-wrapper">
           <div class="auth-header">
              <h3>Login</h3>
           </div>
           <form>
               <div class="form-group">
                   <label for="exampleInputEmail1">Email address</label>
                   <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>
               <div class="form-group">
                   <label for="exampleInputPassword1">Password</label>
                   <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
               </div>
               <div class="form-check">
                   <input type="checkbox" class="form-check-input" id="exampleCheck1">
                   <label class="form-check-label" for="exampleCheck1">Check me out</label>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
           </form>
       </div>

    </div>
</template>
<style scoped>
  .auth-parent{
      width: 100%;
      height: 100vh;
      background-color: white;
  }
    .auth-wrapper{
        width: 50%;
        margin: auto;
        padding-top: 100px;
    }
    form label{
        font-weight: bold;
    }
    form button{
        margin-top: 24px;
        width: 100%;
    }
    .auth-header h3{
        text-align: center;
        font-size: 35px;
        font-weight: bold;
        color: #3490dc;
    }
</style>
