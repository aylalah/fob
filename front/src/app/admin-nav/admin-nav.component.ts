import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/Services/auth.service';
import { TokenService } from 'src/app/Services/token.service';

@Component({
  selector: 'app-admin-nav',
  templateUrl: './admin-nav.component.html',
  styleUrls: ['./admin-nav.component.css']
})
export class AdminNavComponent implements OnInit {

public loggedIn: boolean;

constructor(
  private Auth: AuthService,
  private router: Router,
  private Token: TokenService
) { }

 // tslint:disable-next-line:typedef
 private tokenExpired(token: string) {
  const expiry = (JSON.parse(atob(token.split('.')[1]))).exp;
  return (Math.floor((new Date).getTime() / 1000)) >= expiry;
}
ngOnInit(): void {
  this.Auth.authStatus.subscribe(Value => this.loggedIn = Value);

  const token = localStorage.getItem('token');
  if(this.tokenExpired(token)) {
      this.Token.remove();
      this.Auth.changeAuthStatus(false);
      this.router.navigateByUrl('home');

      window.location.reload();

    }
    else {
    }
}

logout( Event: MouseEvent) {
  Event.preventDefault();
  this.Auth.changeAuthStatus(false);
  this.Token.remove();
  this.router.navigateByUrl('home');
}

}
