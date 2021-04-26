import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { JarwisService } from 'src/app/Services/jarwis.service';
import { TokenService } from 'src/app/Services/token.service';

@Component({
  selector: 'app-talentdash',
  templateUrl: './talentdash.component.html',
  styleUrls: ['./talentdash.component.css']
})
export class TalentdashComponent implements OnInit {

  profile: any;
  profileResponse: any;
  role: any;

  constructor(private Jarwis: JarwisService,
              private router: Router,
              private Token: TokenService,
      ) { }

  ngOnInit(): void {

      this.Jarwis.profile().subscribe(
        data => {
        this.profileResponse = data;
        this.profile = this.profileResponse.Data;
        this.role = this.profileResponse.user_category_id;
      });

  }

}
