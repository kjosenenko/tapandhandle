import { Injectable } from '@angular/core';
import {HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';
import {Observable, of } from 'rxjs';
import { map, catchError, tap} from 'rxjs/operators';

const draftEndpoint = 'https://business.untappd.com/api/v1/menus/1328?full=true;'
const bottleEndpoint = 'https://business.untappd.com/api/v1/menus/1331?full=true'
const httpOptions = {
  headers: new HttpHeaders({
      'Content-Type': 'application/json',
      'Authorization': 'Basic YW5kcmV3QHRhcGFuZGhhbmRsZS5jb206M0JBOHczRTNCanlCa3I1MjN0YjE='
  })
};

@Injectable({
  providedIn: 'root'
})
export class UntappdApiService {

  constructor(private http:HttpClient) {
    console.log('untsppd api service loaded...');
  }

  getDrafts(): Observable<any> {
    return this.http.get(draftEndpoint, httpOptions).pipe(
        map(this.extractData));
  }

  getBottles(): Observable<any> {
      return this.http.get(bottleEndpoint, httpOptions).pipe(
          map(this.extractData));
  }

  private extractData(res: Response) {
    let body = res;
    return body || { };
  }

}