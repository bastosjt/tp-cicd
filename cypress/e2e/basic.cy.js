describe('Basic E2E Test', () => {
  it('visits the app', () => {
    cy.visit('http://127.0.0.1:8000')
    cy.contains('Welcome')
  })
})