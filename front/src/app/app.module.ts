import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { NzButtonModule } from 'ng-zorro-antd/button'
import { NzCarouselModule } from 'ng-zorro-antd/carousel';

import { NavbarComponent } from './navbar/navbar.component';
import { LoginComponent } from './auth/login/login.component';
import { SignupComponent } from './auth/signup/signup.component';
import { ProfileComponent } from './components/admin/profile/profile.component';
import { RequestResetComponent } from './auth/password/request-reset/request-reset.component';
import { ResponseResetComponent } from './auth/password/response-reset/response-reset.component';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './components/site/home/home.component';
import { FooterComponent } from './components/site/footer/footer.component';
import { GalleryComponent } from './components/site/gallery/gallery.component';
import { TalentComponent } from './components/site/talent/talent.component';
import { GalleriesComponent } from './components/site/galleries/galleries.component';
import { ActivityComponent } from './components/site/activity/activity.component';
import { ActivitiesComponent } from './components/site/activities/activities.component';
import { AboutComponent } from './components/site/about/about.component';
import { TalentsComponent } from './components/site/talents/talents.component';
import { AdminNavComponent } from './admin-nav/admin-nav.component';
import { DashboardComponent } from './components/admin/dashboard/dashboard.component';
import { TalentdashComponent } from './components/admin/dashboard/talentdash/talentdash.component';
import { AdmindashComponent } from './components/admin/dashboard/admindash/admindash.component';
import { InvestordashComponent } from './components/admin/dashboard/investordash/investordash.component';
import { UpdateprofileComponent } from './components/admin/updateprofile/updateprofile.component';
import { AdminfooterComponent } from './components/admin/adminfooter/adminfooter.component';
import { GuestComponent } from './components/admin/dashboard/guest/guest.component';
import { InvestorsComponent } from './components/site/investors/investors.component';

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    LoginComponent,
    SignupComponent,
    ProfileComponent,
    RequestResetComponent,
    ResponseResetComponent,
    HomeComponent,
    FooterComponent,
    GalleryComponent,
    TalentComponent,
    GalleriesComponent,
    ActivityComponent,
    ActivitiesComponent,
    AboutComponent,
    TalentsComponent,
    AdminNavComponent,
    DashboardComponent,
    TalentdashComponent,
    AdmindashComponent,
    InvestordashComponent,
    UpdateprofileComponent,
    AdminfooterComponent,
    GuestComponent,
    InvestorsComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule,
    NzButtonModule,
    NzCarouselModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
