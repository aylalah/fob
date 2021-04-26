import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LoginComponent } from './auth/login/login.component';
import { RequestResetComponent } from './auth/password/request-reset/request-reset.component';
import { ResponseResetComponent } from './auth/password/response-reset/response-reset.component';
import { ProfileComponent } from './components/admin/profile/profile.component';
import { SignupComponent } from './auth/signup/signup.component';
import { AfterLoginService } from './Services/after-login.service';
import { BeforeLoginService } from './Services/before-login.service';

// SITE:
import { HomeComponent } from './components/site/home/home.component';
import { GalleryComponent } from './components/site/gallery/gallery.component';
import { TalentsComponent } from './components/site/talents/talents.component';
import { TalentComponent } from './components/site/talent/talent.component';
import { GalleriesComponent } from './components/site/galleries/galleries.component';
import { ActivityComponent } from './components/site/activity/activity.component';
import { ActivitiesComponent } from './components/site/activities/activities.component';
import { AboutComponent } from './components/site/about/about.component';
import { InvestorsComponent } from './components/site/investors/investors.component';


// ADMIN
import { AdminNavComponent } from './admin-nav/admin-nav.component';
import { DashboardComponent } from './components/admin/dashboard/dashboard.component';
import { TalentdashComponent } from './components/admin/dashboard/talentdash/talentdash.component';
import { AdmindashComponent } from './components/admin/dashboard/admindash/admindash.component';
import { InvestordashComponent } from './components/admin/dashboard/investordash/investordash.component';
import { UpdateprofileComponent } from './components/admin/updateprofile/updateprofile.component';

const routes: Routes = [

  {
    path : '',
    component : HomeComponent,
  },


  // Site: Home
  {
    path : 'home',
    component : HomeComponent,
  },
  {
    path : 'galleries',
    component : GalleriesComponent,
  },
  {
    path : 'gallery',
    component : GalleryComponent,
  },
  {
    path : 'activities',
    component : ActivitiesComponent,
  },
  {
    path : 'activity/:id',
    component : ActivityComponent,
  },
  {
    path : 'about',
    component : AboutComponent,
  },
  {
    path : 'talent',
    component : TalentComponent,
  },
  {
    path : 'talents',
    component : TalentsComponent,
  },
  {
    path : 'talent/:id',
    component : TalentComponent,
  },
  {
    path : 'investors',
    component : InvestorsComponent,
  },



    // Auth
    {
      path : '',
      component : HomeComponent,
    },
    {
      path : 'login',
      component : LoginComponent ,
      canActivate : [BeforeLoginService]
    },
    {
      path : 'signup',
      component : SignupComponent,
      canActivate : [BeforeLoginService]
    },
    {
      path : 'profile',
      component : ProfileComponent,
      canActivate : [AfterLoginService]
    },
    {
      path : 'request-password-reset',
      component : RequestResetComponent,
      canActivate : [AfterLoginService]
    },
    {
      path : 'response-password-reset',
      component : ResponseResetComponent,
      canActivate : [AfterLoginService]
    },

    // admin
    {
      path : 'dashboard',
      component : DashboardComponent,
      canActivate : [AfterLoginService]
    },

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
