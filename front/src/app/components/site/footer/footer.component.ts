import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/Services/auth.service';
import { TokenService } from 'src/app/Services/token.service';
import { JarwisService } from 'src/app/Services/jarwis.service';

@Component({
  selector: 'app-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.css']
})
export class FooterComponent implements OnInit {
  public loggedIn : boolean;
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
  address: any;
  description: any;

  constructor(
    private Jarwis: JarwisService,
    private Auth : AuthService,
    private router  : Router,
    private Token : TokenService
  ) {

  }

  ngOnInit(): void {
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
      this.address = this.info.address;
      this.description = this.info.description;
      this.facebook = this.info.facebook;
      this.gmail = this.info.gmail;
      this.instagram = this.info.instagram;
    });
  }

}
