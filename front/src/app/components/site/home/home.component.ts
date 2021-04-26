import { Component, OnInit } from '@angular/core';
import { TokenService } from 'src/app/Services/token.service';
import { JarwisService } from 'src/app/Services/jarwis.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {
  infoResponse: any;
  info: any;
  banerResponse: any;
  baners: any;
  appPhone: any;
  app_url: any;
  baner1: any;
  baner2: any;
  baner3: any;
  aboutResponse: any;
  about: any;
  talentResponse: any;
  Crew: any;
  array = [1, 2, 3, 4];
  dotPosition = 'bottom';
  interviewResponse : any;
  activitiesResponse : any;
  interviews : any;
  activities : any;
  id: string;

  constructor(
    private Jarwis: JarwisService,
    private Token: TokenService,
    private router: Router,
  ) { }

  ngOnInit(): void {

    this.router.routeReuseStrategy.shouldReuseRoute = () => false;

    this.Jarwis.talentcrew().subscribe(
      data => {
      this.talentResponse = data;
      this.Crew = this.talentResponse.Data;

      console.log(this.Crew);
    })

    this.Jarwis.generalinfo().subscribe(
      data=>{
      this.infoResponse = data;
      this.info = this.infoResponse.Data[0];
      this.app_url = this.info.app_url;
    })

    this.Jarwis.gettalentBaner().subscribe(
      data=>{
      this.banerResponse = data;
      this.baners = this.banerResponse.Data;
      this.baner1 =  this.baners[0];
      this.baner2 =  this.baners[1];
      this.baner3 =  this.baners[2];
    });

    this.Jarwis.aboutus().subscribe(
      data=>{
      this.aboutResponse = data;
      this.about = this.aboutResponse.Data;
    })

    this.Jarwis.getInterview().subscribe(
      data=>{
      this.interviewResponse = data;
      this.interviews = this.interviewResponse.Data;
    })

    this.Jarwis.getActivities().subscribe(
      data=>{
      this.activitiesResponse = data;
      this.activities = this.activitiesResponse.Data;
    })
  }

  routelink(value){
    this.id = (btoa(value));
    this.router.navigate(['/talent', this.id]);
}

}
