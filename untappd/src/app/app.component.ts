import { Component, OnInit } from '@angular/core';
import {UntappdApiService} from './untappd-api.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})

export class AppComponent implements OnInit {

  title = 'untappd';
  draftList = {};
  bottleList = {};

  constructor(private untappdApi: UntappdApiService) {
    console.log('APP constructor loaded');
  }

  ngOnInit() {
      this.getMenus();
  }

  getMenus() {
    this.draftList = {};
    this.untappdApi.getDrafts().subscribe((data: {}) => {
      console.log(data);
      this.draftList = data['menu'];
    });
      this.bottleList = {};
      this.untappdApi.getBottles().subscribe((data: {}) => {
          console.log(data);
          this.bottleList = data['menu'];
      });
  }
}
