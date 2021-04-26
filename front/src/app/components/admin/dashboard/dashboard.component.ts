import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { JarwisService } from 'src/app/Services/jarwis.service';
import { TokenService } from 'src/app/Services/token.service';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.css']
})
export class DashboardComponent implements OnInit {
  profile: any;
  profileResponse: any;
  role: any;
  ErrMsg: any;
  infoResponse: any;
  info: any;
  app_url: any;

  constructor(private Jarwis: JarwisService,
              private router: Router,
              private Token: TokenService,
      ) { }

  ngOnInit(): void {

    this.Jarwis.generalinfo().subscribe(
      data=>{
      this.infoResponse = data;
      this.info = this.infoResponse.Data[0];
      this.app_url = this.info.app_url;
    })

    this.Jarwis.profile().subscribe(
        data => {
        this.profileResponse = data;
        this.profile = this.profileResponse.Data;
        this.role = this.profile.user_category_id;
        this.ErrMsg = this.profileResponse.ErrorResponse;
      });

  }
}
