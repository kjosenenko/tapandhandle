import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';


import {NgbModule} from '@ng-bootstrap/ng-bootstrap';

import { AppComponent } from './app.component';
import {UntappdApiService} from './untappd-api.service';

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
      HttpClientModule,
      NgbModule.forRoot()
  ],
  providers: [UntappdApiService],
  bootstrap: [AppComponent]
})
export class AppModule { }
