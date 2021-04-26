import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { environment } from '../../environments/environment';

@Injectable({
  providedIn: 'root'
})
export class JarwisService {

  private baseUrl = environment.baseUrl;
  public imageUrl = environment.imageUrl;

  constructor(private http : HttpClient) { }

  // AUTH
  signup(data) {
    return this.http.post(this.baseUrl + 'signup' ,data)
  }

  login(data) {
    return this.http.post(this.baseUrl + 'login' ,data)
  }

  profile() {
    return this.http.get(this.baseUrl + 'me',{headers:{
      Authorization:`Bearer ${localStorage.token}`
    }})
  }

  ourTeam() {
    return this.http.get(this.baseUrl + 'ourTeam')
  }

  activatAccount(id) {
    return this.http.get(this.baseUrl + 'activatAccount/' + id,{headers:{
      Authorization:`Bearer ${localStorage.token}`
    }})
  }

  // Site: HOME
  generalinfo() {
    return this.http.get(this.baseUrl + 'generalinfo');
  }

  gettalentBaner() {
    return this.http.get(this.baseUrl + 'gettalentBaner');
  }

  aboutus() {
    return this.http.get(this.baseUrl + 'aboutus');
  }

  talentcrew() {
    return this.http.get(this.baseUrl + 'talentcrew');
  }

  getTalent(id:string) {
    return this.http.get(this.baseUrl + 'getTalent/' + id);
  }

  getInterview() {
    return this.http.get(this.baseUrl + 'getInterview');
  }

  getActivities() {
    return this.http.get(this.baseUrl + 'getActivities');
  }
}
