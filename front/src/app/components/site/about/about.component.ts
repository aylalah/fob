import { Component, OnInit } from '@angular/core';
import { TokenService } from 'src/app/Services/token.service';
import { JarwisService } from 'src/app/Services/jarwis.service';
import { Router, ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-about',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.css']
})
export class AboutComponent implements OnInit {
  infoResponse: any;
  info: any;
  app_url: any;
  aboutResponse: any;
  about: any;
  teamResponse: any;
  teams: any;
   constructor(
      private Jarwis: JarwisService,
      private Token: TokenService,
      private actRoute: ActivatedRoute
    ) { }


  ngOnInit(): void {
    this.Jarwis.aboutus().subscribe(
      data=>{
      this.aboutResponse = data;
      this.about = this.aboutResponse.Data;
    })

    this.Jarwis.generalinfo().subscribe(
      data => {
      this.infoResponse = data;
      this.info = this.infoResponse.Data[0];
      this.app_url = this.info.app_url;
    });

    this.Jarwis.ourTeam().subscribe(
      data=>{
      this.teamResponse = data;
      this.teams = this.teamResponse.Data;
    })
  }
 }

