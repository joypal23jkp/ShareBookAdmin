<template>
    <div class="auth-parent">

        <div class="auth-wrapper">
            <div class="auth-header my-3">
                <h3>Reset Password</h3>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password Reservation Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Confirm</button>
            </form>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-success font-weight-bold">PassWord has been to sent your email.</h5>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
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
