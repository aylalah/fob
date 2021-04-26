import { Component, OnInit } from '@angular/core';
import { TokenService } from 'src/app/Services/token.service';
import { JarwisService } from 'src/app/Services/jarwis.service';
import { Router, ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-activity',
  templateUrl: './activity.component.html',
  styleUrls: ['./activity.component.css']
})
export class ActivityComponent implements OnInit {
  infoResponse: any;
  info: any;
  app_url: any;

  constructor(
      private Jarwis: JarwisService,
      private Token: TokenService,
      private actRoute: ActivatedRoute
    ) { }

  ngOnInit(): void {
    this.Jarwis.generalinfo().subscribe(
      data => {
      this.infoResponse = data;
      this.info = this.infoResponse.Data[0];
      this.app_url = this.info.app_url;
    });
  }
}
