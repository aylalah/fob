import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { JarwisService } from 'src/app/Services/jarwis.service';
import { TokenService } from 'src/app/Services/token.service';
import { AuthService } from 'src/app/Services/auth.service';
import { DashboardComponent } from 'src/app/components/admin/dashboard/dashboard.component';

@Component({
  selector: 'app-guest',
  templateUrl: './guest.component.html',
  styleUrls: ['./guest.component.css']
})
export class GuestComponent implements OnInit {

  disabled1 = false;
  disabled2 = false;
  disabled3 = false;
profile: any;
profileResponse: any;
role: any;
  infoResponse: any;
  info: any;
  app_url: any;
  error: any;

constructor(private Jarwis: JarwisService,
            private router: Router,
            private Token: TokenService,
            private Auth: AuthService,
            private Dashboard: DashboardComponent
    ) { }

ngOnInit(): void {

    this.Jarwis.profile().subscribe(
      data => {
      this.profileResponse = data;
      this.profile = this.profileResponse.Data;
      this.role = this.profile.user_category_id;
    });

    this.Jarwis.generalinfo().subscribe(
      data => {
      this.infoResponse = data;
      this.info = this.infoResponse.Data[0];
      this.app_url = this.info.app_url;
    });
  }

activate(id){
  if (id === 3) {
    this.disabled3 = true;
  } if (id === 2) {
    this.disabled2 = true;
  // tslint:disable-next-line:align
  } if (id === 4) {
    this.disabled1 = true;
  }

  this.Jarwis.activatAccount(id).subscribe(
    data => this.handleResponse(data),
     error => this.handleError(error)
     );
  }

  handleResponse(data){

    this.disabled1 = false;
    this.disabled2 = false;
    this.disabled3 = false;
    this.Dashboard.ngOnInit();
  }

  handleError(error){
    this.error = error.error.error;
    this.disabled1 = false;
    this.disabled2 = false;
    this.disabled3 = false;
  }


}
