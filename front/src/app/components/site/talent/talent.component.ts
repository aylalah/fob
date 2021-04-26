import { Component, OnInit } from '@angular/core';
import { TokenService } from 'src/app/Services/token.service';
import { JarwisService } from 'src/app/Services/jarwis.service';
import { Router, ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-talent',
  templateUrl: './talent.component.html',
  styleUrls: ['./talent.component.css']
})
export class TalentComponent implements OnInit {
  talentResponse: any;
  Crew: any;
  infoResponse: any;
  info: any;
  app_url: any;
  talent: any;
  talentRresponde: any;
  talentId: string;

  constructor(
    private Jarwis: JarwisService,
    private Token: TokenService,
    private actRoute: ActivatedRoute
  ) { }

  ngOnInit(): void {

    this.actRoute.paramMap.subscribe((params => {
      const id = params.get('id');
      this.talentId = atob(id); // this will decode the data

      this.Jarwis.getTalent(this.talentId).subscribe(
        data => {
          this.talentRresponde = data;
          this.talent = this.talentRresponde.Data;
        }
      );

    }));

    this.Jarwis.generalinfo().subscribe(
          data => {
          this.infoResponse = data;
          this.info = this.infoResponse.Data[0];
          this.app_url = this.info.app_url;
        });
      }

}
