import React from 'react';
import { createRoot } from 'react-dom/client';
import SdgGrid from './components/SdgGrid';

const sdgRoot = document.getElementById('sdg-react-root');
if (sdgRoot) {
    const root = createRoot(sdgRoot);
    root.render(<SdgGrid />);
}
