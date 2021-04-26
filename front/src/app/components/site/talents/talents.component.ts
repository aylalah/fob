import { Component, OnInit } from '@angular/core';
import { TokenService } from 'src/app/Services/token.service';
import { JarwisService } from 'src/app/Services/jarwis.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-talents',
  templateUrl: './talents.component.html',
  styleUrls: ['./talents.component.css']
})
export class TalentsComponent implements OnInit {

talentResponse: any;
Crew: any;
infoResponse: any;
info: any;
app_url: any;
  id: string;

  constructor(
    private Jarwis: JarwisService,
    private Token: TokenService,
    private router: Router,
  ) { }

  ngOnInit(): void {

  this.Jarwis.talentcrew().subscribe(
    data => {
    this.talentResponse = data;
    this.Crew = this.talentResponse.Data;

    console.log(this.Crew);
  });

  this.Jarwis.generalinfo().subscribe(
      data => {
      this.infoResponse = data;
      this.info = this.infoResponse.Data[0];
      this.app_url = this.info.app_url;
    });
  }

  routelink(value){
    this.id = (btoa(value));
    this.router.navigate(['/talent', this.id]);
}

}


