import { Component, OnInit } from '@angular/core';
import { TokenService } from 'src/app/Services/token.service';
import { JarwisService } from 'src/app/Services/jarwis.service';

@Component({
  selector: 'app-activities',
  templateUrl: './activities.component.html',
  styleUrls: ['./activities.component.css']
})
export class ActivitiesComponent implements OnInit {

  interviewResponse : any;
  activitiesResponse : any;
  interviews : any;
  activities : any;
  infoResponse: any;
  app_url: any;
  info: any;

constructor(
    private Jarwis: JarwisService,
    private Token: TokenService,
  ) { }

  ngOnInit(): void {
  this.Jarwis.generalinfo().subscribe(
      data=>{
      this.infoResponse = data;
      this.info = this.infoResponse.Data[0];
      this.app_url = this.info.app_url;
    })
  this.Jarwis.getActivities().subscribe(
      data=>{
      this.activitiesResponse = data;
      this.activities = this.activitiesResponse.Data;
    })

  }

}
