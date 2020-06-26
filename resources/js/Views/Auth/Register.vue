<template>
    <div class="auth-parent">

        <div class="auth-wrapper">
            <div class="auth-header">
                <h3>Register</h3>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <div class="d-flex">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>

    </div>
</template>
<style scoped>
    .auth-parent{
        padding-top: 68px;
        width: 100%;
        height: 100vh;
        background-color: white;
    }
    .auth-wrapper{
        width: 50%;
        margin: auto;
        padding-top: 50px;
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
