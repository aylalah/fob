import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AuthService } from 'src/app/Services/auth.service';
import { JarwisService } from 'src/app/Services/jarwis.service';
import { TokenService } from 'src/app/Services/token.service';
import { AppComponent } from 'src/app/app.component';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  model: any = {};
    loading = false;
    returnUrl: string;
  public form = {
    email : null,
    password : null
  }
  disabled = false;

  public error = null;

  constructor(
    private Jarwis: JarwisService,
    private Token:TokenService,
    private router  : Router,
    private Auth : AuthService,
    private App : AppComponent
              ) { }

  ngOnInit(): void {
  }
  onSubmit(){
    this.disabled = true;
    this.Jarwis.login(this.form).subscribe(
     data => this.handleResponse(data),
     error => this.handleError(error)
     );
  }

  handleResponse(data){
    this.Token.handle(data.access_token);
    this.Auth.changeAuthStatus(true);
    this.router.navigateByUrl('/dashboard');
    this.App.ngOnInit();
    this.disabled= false;
  }

  handleError(error){
    this.error = error.error.error;
    this.disabled= false;
  }

}
