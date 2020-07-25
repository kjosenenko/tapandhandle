import { TestBed } from '@angular/core/testing';

import { UntappdApiService } from './untappd-api.service';

describe('UntappdApiService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: UntappdApiService = TestBed.get(UntappdApiService);
    expect(service).toBeTruthy();
  });
});
