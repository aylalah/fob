import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/Services/auth.service';
import { TokenService } from 'src/app/Services/token.service';
import { JarwisService } from 'src/app/Services/jarwis.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {

  public loggedIn: boolean;
  infoResponse: any;
  info: any;
  appPhone: any;
  support_mail: any;
  app_url: any;
  logo: any;
  twitter: any;
  facebook: any;
  gmail: any;
  instagram: any;
  token: string;

  constructor(
    private Jarwis: JarwisService,
    private Auth: AuthService,
    private router: Router,
    private Token: TokenService
  ) {

  }

  // tslint:disable-next-line:typedef
  // private tokenExpired(token: string) {
  //   const expiry = (JSON.parse(atob(token.split('.')[1]))).exp;
  //   return (Math.floor((new Date).getTime() / 1000)) >= expiry;
  // }

  ngOnInit(): void {

    // let token = localStorage.getItem("token");

    // if (this.tokenExpired(token)) {
    //   // event.preventDefault();
    //   this.Token.remove();
    //   this.Auth.changeAuthStatus(false);
    //   this.router.navigateByUrl('/login');
    // }
    // else {
    // }

    this.Auth.authStatus.subscribe(Value => this.loggedIn = Value);
    this.Jarwis.generalinfo().subscribe(
      data => {
      this.infoResponse = data;
      this.info = this.infoResponse.Data[0];
      this.appPhone = this.info.phone;
      this.support_mail = this.info.support_mail;
      this.app_url = this.info.app_url;
      this.logo = this.info.logo;
      this.twitter = this.info.twitter;
      this.facebook = this.info.facebook;
      this.gmail = this.info.gmail;
      this.instagram = this.info.instagram;
    });
  }

  logout( Event: MouseEvent): void {
    Event.preventDefault();
    this.Auth.changeAuthStatus(false);
    this.Token.remove();
    this.router.navigateByUrl('home');
  }

}
