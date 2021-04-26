import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

import { JarwisService } from 'src/app/Services/jarwis.service';
import { TokenService } from 'src/app/Services/token.service';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css']
})
export class SignupComponent implements OnInit {

  disabled = false;
  public form = {
    email : null,
    firstname : null,
    lastname : null,
    password : null,
    password_confirmation : null
  };

  public error: any;

  constructor(private Jarwis: JarwisService,
              private router  : Router,
              private Token:TokenService,
    ) { }

  onSubmit(){
  this.disabled = true;
  this.Jarwis.signup(this.form).subscribe(
     data => this.handleResponse(data),
     error => this.handleError(error)
     );
  }

  handleResponse(data){
    this.Token.handle(data.access_token);
    this.router.navigateByUrl('/dashboard');
    this.disabled= false;
  }

  handleError(error){
    this.error = error.error.errors;
    this.disabled= false;
  }
  ngOnInit(): void {
  }

}
